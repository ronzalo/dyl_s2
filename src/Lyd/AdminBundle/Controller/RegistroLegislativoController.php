<?php

namespace Lyd\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lyd\AdminBundle\Entity\RegistroLegislativo;
use Lyd\AdminBundle\Form\RegistroLegislativoType;

/**
 * RegistroLegislativo controller.
 *
 */
class RegistroLegislativoController extends Controller
{
    /**
     * Lists all RegistroLegislativo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LydAdminBundle:RegistroLegislativo')->findAll();

        return $this->render('LydAdminBundle:RegistroLegislativo:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a RegistroLegislativo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LydAdminBundle:RegistroLegislativo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RegistroLegislativo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LydAdminBundle:RegistroLegislativo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new RegistroLegislativo entity.
     *
     */
    public function newAction()
    {
        $entity = new RegistroLegislativo();
        $form   = $this->createForm(new RegistroLegislativoType(), $entity);

        return $this->render('LydAdminBundle:RegistroLegislativo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new RegistroLegislativo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new RegistroLegislativo();
        $form = $this->createForm(new RegistroLegislativoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('registrolegislativo_show', array('id' => $entity->getId())));
        }

        return $this->render('LydAdminBundle:RegistroLegislativo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RegistroLegislativo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LydAdminBundle:RegistroLegislativo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RegistroLegislativo entity.');
        }

        $editForm = $this->createForm(new RegistroLegislativoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('LydAdminBundle:RegistroLegislativo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing RegistroLegislativo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LydAdminBundle:RegistroLegislativo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RegistroLegislativo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RegistroLegislativoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('registrolegislativo_edit', array('id' => $id)));
        }

        return $this->render('LydAdminBundle:RegistroLegislativo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a RegistroLegislativo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('LydAdminBundle:RegistroLegislativo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RegistroLegislativo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('registrolegislativo'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
