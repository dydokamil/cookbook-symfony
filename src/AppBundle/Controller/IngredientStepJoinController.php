<?php

namespace AppBundle\Controller;

use AppBundle\Entity\IngredientStepJoin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ingredientstepjoin controller.
 *
 * @Route("ingredientstepjoin")
 */
class IngredientStepJoinController extends Controller
{
    /**
     * Lists all ingredientStepJoin entities.
     *
     * @Route("/", name="ingredientstepjoin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ingredientStepJoins = $em->getRepository('AppBundle:IngredientStepJoin')->findAll();

        return $this->render('ingredientstepjoin/index.html.twig', array(
            'ingredientStepJoins' => $ingredientStepJoins,
        ));
    }

    /**
     * Creates a new ingredientStepJoin entity.
     *
     * @Route("/new", name="ingredientstepjoin_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $step_id = $request->get('step');
        $repository = $this->getDoctrine()->getRepository('AppBundle:RecipeStep');
        $step = $repository->find($step_id);

        $ingredientStepJoin = new Ingredientstepjoin();
        $ingredientStepJoin->setRecipeStep($step);
        $form = $this->createForm('AppBundle\Form\IngredientStepJoinType', $ingredientStepJoin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingredientStepJoin);
            $em->flush();

            return $this->redirectToRoute('recipestep_show', array('id' => $step->getId()));
        }

        return $this->render('ingredientstepjoin/new.html.twig', array(
            'ingredientStepJoin' => $ingredientStepJoin,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ingredientStepJoin entity.
     *
     * @Route("/{id}", name="ingredientstepjoin_show")
     * @Method("GET")
     */
    public function showAction(IngredientStepJoin $ingredientStepJoin)
    {
        $deleteForm = $this->createDeleteForm($ingredientStepJoin);

        return $this->render('ingredientstepjoin/show.html.twig', array(
            'ingredientStepJoin' => $ingredientStepJoin,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ingredientStepJoin entity.
     *
     * @Route("/{id}/edit", name="ingredientstepjoin_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, IngredientStepJoin $ingredientStepJoin)
    {
        $deleteForm = $this->createDeleteForm($ingredientStepJoin);
        $editForm = $this->createForm('AppBundle\Form\IngredientStepJoinType', $ingredientStepJoin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ingredientstepjoin_edit', array('id' => $ingredientStepJoin->getId()));
        }

        return $this->render('ingredientstepjoin/edit.html.twig', array(
            'ingredientStepJoin' => $ingredientStepJoin,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ingredientStepJoin entity.
     *
     * @Route("/{id}", name="ingredientstepjoin_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IngredientStepJoin $ingredientStepJoin)
    {
        $form = $this->createDeleteForm($ingredientStepJoin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ingredientStepJoin);
            $em->flush();
        }

        return $this->redirectToRoute('ingredientstepjoin_index');
    }

    /**
     * Creates a form to delete a ingredientStepJoin entity.
     *
     * @param IngredientStepJoin $ingredientStepJoin The ingredientStepJoin entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IngredientStepJoin $ingredientStepJoin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingredientstepjoin_delete', array('id' => $ingredientStepJoin->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
