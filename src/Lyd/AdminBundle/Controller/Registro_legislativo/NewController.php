<?php

namespace Lyd\AdminBundle\Controller\Registro_legislativo;

use Admingenerator\GeneratorBundle\Controller\Doctrine\BaseController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Lyd\AdminBundle\Form\Type\Registro_legislativo\NewType;


class NewController extends BaseController
{
    public function indexAction()
    {
        

        $RegistroLegislativo = $this->getNewObject();

        $form = $this->createForm($this->getNewType(), $RegistroLegislativo);

        return $this->render('LydAdminBundle:Registro_legislativoNew:index.html.twig', array(
            "RegistroLegislativo" => $RegistroLegislativo,
            "form" => $form->createView(),
        ));
    }

    public function createAction()
    {
        

        $RegistroLegislativo = $this->getNewObject();

        $form = $this->createForm($this->getNewType(), $RegistroLegislativo);
        $form->bindRequest($this->get('request'));

        if ($form->isValid()) {
            try {
                $this->preSave($form, $RegistroLegislativo);
                $this->saveObject($RegistroLegislativo);
                $this->postSave($form, $RegistroLegislativo);

                $this->get('session')->setFlash('success', $this->get('translator')->trans("object.saved.success", array(), 'Admingenerator') );

                return new RedirectResponse($this->generateUrl("Lyd_AdminBundle_Registro_legislativo_edit", array('pk' => $RegistroLegislativo->getId()) ));
            } catch (\Exception $e) {
                $this->get('session')->setFlash('error',  $this->get('translator')->trans("object.saved.error", array(), 'Admingenerator') );
                $this->onException($e, $form, $RegistroLegislativo);
            }

        } else {
            $this->get('session')->setFlash('error', $this->get('translator')->trans("object.saved.error", array(), 'Admingenerator') );
        }

        return $this->render('LydAdminBundle:Registro_legislativoNew:index.html.twig', array(
            "RegistroLegislativo" => $RegistroLegislativo,
            "form" => $form->createView(),
        ));
    }

    /**
    * This method is here to make your life better, so overwrite  it
    *
    * @param \Exception $exception throwed exception
    * @param \Symfony\Component\Form\Form $form the valid form
    * @param \Lyd\AdminBundle\Entity\RegistroLegislativo $RegistroLegislativo your \Lyd\AdminBundle\Entity\RegistroLegislativo object
    */
    public function onException(\Exception $exception, \Symfony\Component\Form\Form $form, \Lyd\AdminBundle\Entity\RegistroLegislativo $RegistroLegislativo)
    {
    }

    /**
    * This method is here to make your life better, so overwrite  it
    *
    * @param \Symfony\Component\Form\Form $form the valid form
    * @param \Lyd\AdminBundle\Entity\RegistroLegislativo $RegistroLegislativo your \Lyd\AdminBundle\Entity\RegistroLegislativo object
    */
    public function preSave(\Symfony\Component\Form\Form $form, \Lyd\AdminBundle\Entity\RegistroLegislativo $RegistroLegislativo)
    {
    }

    /**
    * This method is here to make your life better, so overwrite  it
    *
    * @param \Symfony\Component\Form\Form $form the valid form
    * @param \Lyd\AdminBundle\Entity\RegistroLegislativo $RegistroLegislativo your \Lyd\AdminBundle\Entity\RegistroLegislativo object
    */
    public function postSave(\Symfony\Component\Form\Form $form, \Lyd\AdminBundle\Entity\RegistroLegislativo $RegistroLegislativo)
    {
    }


    protected function getNewType()
    {
        $type = new NewType();
        $type->setSecurityContext($this->get('security.context'));

        return $type;
    }

    protected function getNewObject()
    {
        return new \Lyd\AdminBundle\Entity\RegistroLegislativo;
    }

    protected function saveObject(\Lyd\AdminBundle\Entity\RegistroLegislativo $RegistroLegislativo)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($RegistroLegislativo);
        $em->flush();
    }
}
