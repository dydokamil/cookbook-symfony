<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngredientStepJoin
 *
 * @ORM\Table(name="ingredient_step_join")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientStepJoinRepository")
 */
class IngredientStepJoin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * Many IngredientStepJoins have One RecipeStep.
     * @ORM\ManyToOne(targetEntity="RecipeStep", inversedBy="ingredient_step_joins")
     */
    private $recipe_step;

    /**
     * Many IngredientStepJoins have One Ingredient.
     * @ORM\ManyToOne(targetEntity="Ingredient", inversedBy="ingredient_step_joins")
     */
    private $ingredient;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return IngredientStepJoin
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set recipeStep
     *
     * @param \AppBundle\Entity\RecipeStep $recipeStep
     *
     * @return IngredientStepJoin
     */
    public function setRecipeStep(\AppBundle\Entity\RecipeStep $recipeStep = null)
    {
        $this->recipe_step = $recipeStep;

        return $this;
    }

    /**
     * Get recipeStep
     *
     * @return \AppBundle\Entity\RecipeStep
     */
    public function getRecipeStep()
    {
        return $this->recipe_step;
    }

    /**
     * Set ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return IngredientStepJoin
     */
    public function setIngredient(\AppBundle\Entity\Ingredient $ingredient = null)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return \AppBundle\Entity\Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }
}
