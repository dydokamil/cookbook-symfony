<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * RecipeStep
 *
 * @ORM\Table(name="recipe_step")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeStepRepository")
 */
class RecipeStep
{
    function __toString() {
        return $this->getId();
    }
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
     * @ORM\Column(name="prep_time", type="integer")
     */
    private $prepTime;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="instructions", type="string", length=255)
     */
    private $instructions;

    /**
     * @var int
     *
     * @ORM\Column(name="cook_time", type="integer")
     */
    private $cookTime;

    /**
     * Many RecipeSteps have One Recipe.
     * @ORM\ManyToOne(targetEntity="Recipe", inversedBy="recipe_steps")
     */
    private $recipe;

    /**
     * One RecipeStep has Many IngredientStepJoins.
     * @ORM\OneToMany(targetEntity="IngredientStepJoin", 
     * mappedBy="recipe_step", 
     * cascade={"persist", "remove"}, 
     * orphanRemoval=true)
     */
    private $ingredient_step_joins;

    public function __construct() {
        $this->ingredient_step_joins = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set prepTime
     *
     * @param integer $prepTime
     *
     * @return RecipeStep
     */
    public function setPrepTime($prepTime)
    {
        $this->prepTime = $prepTime;

        return $this;
    }

    /**
     * Get prepTime
     *
     * @return int
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return RecipeStep
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set instructions
     *
     * @param string $instructions
     *
     * @return RecipeStep
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set cookTime
     *
     * @param integer $cookTime
     *
     * @return RecipeStep
     */
    public function setCookTime($cookTime)
    {
        $this->cookTime = $cookTime;

        return $this;
    }

    /**
     * Get cookTime
     *
     * @return int
     */
    public function getCookTime()
    {
        return $this->cookTime;
    }

    /**
     * Set recipe
     *
     * @param \AppBundle\Entity\Recipe $recipe
     *
     * @return RecipeStep
     */
    public function setRecipe(\AppBundle\Entity\Recipe $recipe = null)
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get recipe
     *
     * @return \AppBundle\Entity\Recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Add ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     *
     * @return RecipeStep
     */
    public function addIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    /**
     * Remove ingredient
     *
     * @param \AppBundle\Entity\Ingredient $ingredient
     */
    public function removeIngredient(\AppBundle\Entity\Ingredient $ingredient)
    {
        $this->ingredients->removeElement($ingredient);
    }

    /**
     * Get ingredients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Add ingredientStepJoin
     *
     * @param \AppBundle\Entity\IngredientStepJoin $ingredientStepJoin
     *
     * @return RecipeStep
     */
    public function addIngredientStepJoin(\AppBundle\Entity\IngredientStepJoin $ingredientStepJoin)
    {
        $this->ingredient_step_joins[] = $ingredientStepJoin;

        return $this;
    }

    /**
     * Remove ingredientStepJoin
     *
     * @param \AppBundle\Entity\IngredientStepJoin $ingredientStepJoin
     */
    public function removeIngredientStepJoin(\AppBundle\Entity\IngredientStepJoin $ingredientStepJoin)
    {
        $this->ingredient_step_joins->removeElement($ingredientStepJoin);
    }

    /**
     * Get ingredientStepJoins
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIngredientStepJoins()
    {
        return $this->ingredient_step_joins;
    }
}
