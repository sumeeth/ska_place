<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Temple;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Temple controller.
 *
 * @Route("temple")
 */
class TempleController extends Controller
{
    /**
     * Lists all temple entities.
     *
     * @Route("/", name="temple_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $temples = $em->getRepository('AppBundle:Temple')->findAll();

        return $this->render('temple/index.html.twig', array(
            'temples' => $temples,
        ));
    }

    /**
     * Creates a new temple entity.
     *
     * @Route("/new", name="temple_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $temple = new Temple();
        $form = $this->createForm('AppBundle\Form\TempleType', $temple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($temple);
            $em->flush();

            return $this->redirectToRoute('temple_show', array('id' => $temple->getId()));
        }

        return $this->render('temple/new.html.twig', array(
            'temple' => $temple,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a temple entity.
     *
     * @Route("/{id}", name="temple_show")
     * @Method("GET")
     */
    public function showAction(Temple $temple)
    {
        $deleteForm = $this->createDeleteForm($temple);

        return $this->render('temple/show.html.twig', array(
            'temple' => $temple,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing temple entity.
     *
     * @Route("/{id}/edit", name="temple_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Temple $temple)
    {
        $deleteForm = $this->createDeleteForm($temple);
        $editForm = $this->createForm('AppBundle\Form\TempleType', $temple);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('temple_edit', array('id' => $temple->getId()));
        }

        return $this->render('temple/edit.html.twig', array(
            'temple' => $temple,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a temple entity.
     *
     * @Route("/{id}", name="temple_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Temple $temple)
    {
        $form = $this->createDeleteForm($temple);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($temple);
            $em->flush();
        }

        return $this->redirectToRoute('temple_index');
    }

    /**
     * Creates a form to delete a temple entity.
     *
     * @param Temple $temple The temple entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Temple $temple)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('temple_delete', array('id' => $temple->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
