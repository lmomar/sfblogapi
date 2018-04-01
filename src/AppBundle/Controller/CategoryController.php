<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CategoryController
 * @package AppBundle\Controller
 * @\Symfony\Component\Routing\Annotation\Route(path="/api")
 */
class CategoryController extends Controller
{
    /**
     * @SWG\Tag(name="Category")
     * @SWG\Response(
     *     response=200,
     *     description="Return Category instance",
     *     @SWG\Schema(
     *     type="array",
     *     @Model(type="AppBundle\Entity\Category")
     * )
     * )
     * @SWG\Parameter(
     *     name="form",
     *     in="body",
     *     description="Form Category",
     *     @Model(type="AppBundle\Form\CategoryType")
     * )
     * @param Request $request
     * @return Category|boolean
     * @Rest\Post(path="/category/add")
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     */
    public function postCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cat = new Category();
        $form = $this->createForm(CategoryType::class, $cat);
        $form->submit($request->request->get($form->getName()));
        //$form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($cat);
            $em->flush();
            return $cat;
        } else {
            return false;
        }
    }


    /**
     * @param Request $request
     * @return mixed
     * @Rest\Put(path="/category/edit/{id}")
     * @Rest\View(statusCode=Response::HTTP_ACCEPTED)
     * @SWG\Tag(name="Category")
     * @SWG\Parameter(
     *     name="form",
     *     in="body",
     *     description="Form Category update",
     *     @Model(type="AppBundle\Form\CategoryType")
     * )
     * )
     * @SWG\Response(
     *     response=201,
     *     description="Category Object",
     *     @SWG\Schema(
     *     type="array",
     *     @Model(type="AppBundle\Entity\Category")
     * )
     * )
     */

    public function putCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Category::class);
        $cat = $repo->find($request->get('id'));
        if (empty($cat)) {
            return new JsonResponse(array('error' => "Category not found"), 404);
        }
        $form = $this->createForm(CategoryType::class, $cat);
        $form->submit($request->request->get($form->getName()));
        if ($form->isValid()) {
            $em->flush();
            return $cat;
        } else {
            return $form->getErrors();
        }
    }

    /**
     * @Rest\Get(path="/categories/{page}")
     * @Rest\View()
     * @SWG\Tag(name="Category")
     * @SWG\Response(
     *     response="201",
     *     description="List categories",
     * )
     * )
     */
    public function getCategoriesAction(Request $request)
    {
        $page = $request->get('page');
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Category::class)->paginate($page, $this->container->getParameter('articles_per_page'));
        $pagination = array(
            'count' => count($categories),
            'page' => (int)$page,
            'nbPages' => ceil(count($categories) / $this->container->getParameter('articles_per_page')),
            'route' => $this->generateUrl('app_category_getcategories', array('page' => $page)),
            'paramsRoute' => array()
        );

        return new JsonResponse(array(
            'categories' => $categories->getQuery()->getArrayResult(),
            'pagination' => $pagination
        ));
        //return $this->getDoctrine()->getRepository(Category::class)->findAll();

    }

    /**
     * @param Request $request
     * @return mixed
     * @Rest\Delete(path="/category/remove/{id}")
     * @Rest\View(statusCode=202)
     * @SWG\Tag(name="Category")
     * @SWG\Response(
     *     response=202,
     *     description="Category Object deleted",
     * )
     */
    public function removeCategoryAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Category::class);
        $cat = $repo->find($id);
        if (!is_object($cat)) {
            return new JsonResponse(array("error" => "Category not found"), 404);
        }
        $em->remove($cat);
        $em->flush();
        return true;
    }


    /**
     * @return Category[]|array
     * @Rest\Get(path="/categories")
     * @Rest\View()
     * @SWG\Tag(name="Category")
     * @SWG\Response(
     *     response="201",
     *     description="List categories",
     * )
     * )
     */
    public function getAllCategoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Category::class)->findAll();
        return $categories;
    }
}
