<?php

namespace loginBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $form = $this->createFormBuilder()
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('mail', TextType::class)
            ->add('ConfimationMail', TextType::class)
            ->add('MotDePasse', TextType::class)
            ->add('Send', SubmitType::class, array('label' => 'S\'inscrire' ))
            ->getForm();

        return $this->render('loginBundle:Default:index.html.twig', array('form' => $form->createView(),));
    }
}
