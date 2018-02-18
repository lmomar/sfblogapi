<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Post;
use AppBundle\Entity\Product;
use AppBundle\Form\PostType;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PostController
 * @package AppBundle\Controller
 * @\Symfony\Component\Routing\Annotation\Route(path="/api")
 */
class PostController extends Controller
{
    /**
     * @SWG\Tag(name="Post")
     * @SWG\Response(
     *     response=200,
     *     description="Return Post instance",
     *     @SWG\Schema(
     *     type="array",
     *     @Model(type="AppBundle\Entity\Post")
     * )
     * )
     * @SWG\Parameter(
     *     name="form",
     *     in="body",
     *     description="Form Post",
     *     @Model(type="AppBundle\Form\PostType")
     * )
     * @param Request $request
     * @return Post
     * @Rest\Post(path="/post/add")
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     */
    public function postPostAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $post = new Post();
        $form = $this->createForm(PostType::class,$post);
        $form->submit($request->request->get($form->getName()));
        if($form->isValid()){
            $em->persist($post);
            $em->flush();
            return $post;
        }else{
            return $form;
        }
    }

    /**
     * @param Request $request
     * @return Post|null|object|\Symfony\Component\Form\FormInterface|JsonResponse
     * @Rest\Put(path="/post/edit/{id}",requirements={"id"="\d+"})
     * @Rest\View()
     * @SWG\Tag(name="Post")
     * @SWG\Response(
     *     response="201",
     *     description="Success",
     *     @Model(type="AppBundle\Entity\Post")
     * )
     * @SWG\Parameter(
     *     name="form",
     *     in="body",
     *     @SWG\Schema(
     *     type="array",
     *     @Model(type="AppBundle\Form\PostType")
     * )
     * )
     */
    public function putPostAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Post::class);
        $post = $repo->find($request->get('id'));
        if(empty($post)){
            return new JsonResponse(array('error' => 'Post not found'),404);
        }
        $form = $this->createForm(PostType::class,$post);
        $form->submit($request->request->get($form->getName()));
        if($form->isValid()){
            $em->flush();
            return $post;
        }
        else{
            return $form;
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Rest\Get(path="/posts/category/{id}")
     * @Rest\View()
     * @SWG\Tag(name="Post")
     * @SWG\Response(
     *     response="200",
     *     description="Success"
     * )
     */
    public function getPostsByCategoryAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository(Category::class)->find($request->get('id'));
        if(empty($cat)){
            return new JsonResponse(array('error' => 'Category not found'),404);
        }
        $posts = $em->getRepository(Post::class)->findByCategory($cat);
        return $posts;
    }

    /**
     * @param Request $request
     * @return Post|null|object|JsonResponse
     * @Rest\Get(path="/post/{id]")
     * @Rest\View()
     * @SWG\Tag(name="Post")
     * @SWG\Response(
     *     response="200",
     *     description="found",
     *     @Model(type="AppBundle\Entity\Post")
     * )
     */
    public function getPostAction(Request $request){
        $repo = $this->getDoctrine()->getRepository(Post::class);
        $post = $repo->find($request->get('id'));
        if(empty($post)){
            return new JsonResponse(array('error' => 'Post not found'));
        }
        return $post;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Rest\Get(path="/posts/{page}")
     * @Rest\View()
     * @SWG\Tag(name="Post")
     * @SWG\Response(
     *     response="200",
     *     description="Success"
     * )
     */
    public function getPostsAction(Request $request){
        $page = $request->get('page');
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository(Post::class)->paginate($page,$this->container->getParameter('articles_per_page'));
        $pagination = array(
            'count' => count($posts),
            'page' => (int)$page,
            'nbPages' => ceil(count($posts) / $this->container->getParameter('articles_per_page')),
            'route' => $this->generateUrl('app_category_getcategories',array('page' => $page)),
            'paramsRoute' => array()
        );

        return new JsonResponse(array(
            'posts' => $posts->getQuery()->getArrayResult(),
            'pagination' => $pagination
        ));
    }

    /**
     * @param Request $request
     * @return mixed
     * @Rest\Delete(path="/post/remove/{id}")
     * @Rest\View(statusCode=202)
     * @SWG\Tag(name="Post")
     * @SWG\Response(
     *     response=202,
     *     description="Post Object deleted",
     * )
     */
    public function removePostAction(Request $request){
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($id);
        if(!is_object($post)){
            return new JsonResponse(array("error" => "post not found"),404);
        }
        $em->remove($post);
        $em->flush();
        return true;
    }


}
