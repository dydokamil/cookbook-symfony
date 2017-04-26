<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RecipeStep;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Recipestep controller.
 *
 * @Route("recipestep")
 */
class RecipeStepController extends Controller
{
    /**
     * Lists all recipeStep entities.
     *
     * @Route("/", name="recipestep_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recipeSteps = $em->getRepository('AppBundle:RecipeStep')->findAll();

        return $this->render('recipestep/index.html.twig', array(
            'recipeSteps' => $recipeSteps,
        ));
    }

    /**
     * Creates a new recipeStep entity.
     *
     * @Route("/new", name="recipestep_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $recipeStep = new Recipestep();
        $recipe_id = $request->query->get('recipe');
        if ($recipe_id != null) {
            $repository = $this->getDoctrine()->getRepository('AppBundle:Recipe');
            $recipe = $repository->find($recipe_id);
            $recipeStep->setRecipe($recipe);
        }
        $form = $this->createForm('AppBundle\Form\RecipeStepType', $recipeStep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recipeStep);
            $em->flush();

            return $this->redirectToRoute('recipestep_show', array('id' => $recipeStep->getId()));
        }

        return $this->render('recipestep/new.html.twig', array(
            'recipeStep' => $recipeStep,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a recipeStep entity.
     *
     * @Route("/{id}", name="recipestep_show")
     * @Method("GET")
     */
    public function showAction(RecipeStep $recipeStep)
    {
        $deleteForm = $this->createDeleteForm($recipeStep);

        return $this->render('recipestep/show.html.twig', array(
            'recipeStep' => $recipeStep,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recipeStep entity.
     *
     * @Route("/{id}/edit", name="recipestep_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, RecipeStep $recipeStep)
    {
        $deleteForm = $this->createDeleteForm($recipeStep);
        $editForm = $this->createForm('AppBundle\Form\RecipeStepType', $recipeStep);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recipestep_edit', array('id' => $recipeStep->getId()));
        }

        return $this->render('recipestep/edit.html.twig', array(
            'recipeStep' => $recipeStep,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recipeStep entity.
     *
     * @Route("/{id}", name="recipestep_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, RecipeStep $recipeStep)
    {
        $form = $this->createDeleteForm($recipeStep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recipeStep);
            $em->flush();
        }

        return $this->redirectToRoute('recipestep_index');
    }

    /**
     * Creates a form to delete a recipeStep entity.
     *
     * @param RecipeStep $recipeStep The recipeStep entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RecipeStep $recipeStep)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recipestep_delete', array('id' => $recipeStep->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
