<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 3/31/18
 * Time: 11:38 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Student;
use AppBundle\Form\StudentType;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends Controller
{
    /**
     * web interface
     * @param Request $request
     * @Route(path="/student/add")
     * @return Response
     */
    public function addStudentAction(Request $request){
        $student = new Student();
        $form = $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();
        }
        return $this->render('AppBundle:Student:add.html.twig',['form' => $form->createView()]);
    }

    /**
     * Api
     * @param Request $request
     * @return \Symfony\Component\Form\FormInterface
     * @Rest\Post(path="/api/student/add")
     * @Rest\View()
     */
    public function apiAddStudentAction(Request $request){
        $student = new Student();
        $form = $this->createForm(StudentType::class,$student);
        $form->handleRequest($request);
        //$form->submit($request->request->get($form->getName()));
        if($form->isValid() && $form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();
        }
        else{
            return $form->getErrors();
        }
        return $form;
    }
}