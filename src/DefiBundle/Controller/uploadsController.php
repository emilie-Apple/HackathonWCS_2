<?php

namespace DefiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DefiBundle\Entity\uploads;
use DefiBundle\Form\uploadsType;

/**
 * uploads controller.
 *
 */
class uploadsController extends Controller
{
    /**
     * Lists all uploads entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DefiBundle:uploads')->findAll();

        return $this->render('uploads/index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new uploads entity.
     *
     */
    public function newAction(Request $request)
    {
        $entity= new uploads();
        $form = $this->createForm($entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectToRoute('uploads_show', array('id' => $upload->getId()));
        }

        return $this->render('uploads/new.html.twig', array(
            'upload' => $upload,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a uploads entity.
     *
     */
    public function showAction(uploads $upload)
    {
        $deleteForm = $this->createDeleteForm($upload);

        return $this->render('uploads/show.html.twig', array(
            'upload' => $upload,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing uploads entity.
     *
     */
    public function editAction(Request $request, uploads $upload)
    {
        $deleteForm = $this->createDeleteForm($upload);
        $editForm = $this->createForm('DefiBundle\Form\uploadsType', $upload);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($upload);
            $em->flush();

            return $this->redirectToRoute('uploads_edit', array('id' => $upload->getId()));
        }

        return $this->render('uploads/edit.html.twig', array(
            'upload' => $upload,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a uploads entity.
     *
     */
    public function deleteAction(Request $request, uploads $upload)
    {
        $form = $this->createDeleteForm($upload);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($upload);
            $em->flush();
        }

        return $this->redirectToRoute('uploads_index');
    }

    /**
     * Creates a form to delete a uploads entity.
     *
     * @param uploads $upload The uploads entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(uploads $upload)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('uploads_delete', array('id' => $upload->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function createAction()
    {
        $entity  = new Uploads();
        $request = $this->getRequest();
        $form    = $this->createForm($entity);
        $form->handleRequest ($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('uploads_show', array(

                'id' => $entity->getId(),

            )));
        }

        return $this->render(':uploads:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }


}
