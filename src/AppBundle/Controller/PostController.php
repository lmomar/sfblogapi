<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Post;
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

}
