<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientRepository")
 */
class Ingredient
{
    function __toString() {
        return $this->getName();
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\File(mimeTypes={ "image/svg+xml" })
     */
    private $icon;

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * One Ingredient has Many IngredientStepJoins.
     * @ORM\OneToMany(targetEntity="IngredientStepJoin", mappedBy="ingredient")
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
     * Set name
     *
     * @param string $name
     *
     * @return Ingredient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add recipeStep
     *
     * @param \AppBundle\Entity\RecipeStep $recipeStep
     *
     * @return Ingredient
     */
    public function addRecipeStep(\AppBundle\Entity\RecipeStep $recipeStep)
    {
        $this->recipe_steps[] = $recipeStep;

        return $this;
    }

    /**
     * Remove recipeStep
     *
     * @param \AppBundle\Entity\RecipeStep $recipeStep
     */
    public function removeRecipeStep(\AppBundle\Entity\RecipeStep $recipeStep)
    {
        $this->recipe_steps->removeElement($recipeStep);
    }

    /**
     * Get recipeSteps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecipeSteps()
    {
        return $this->recipe_steps;
    }

    /**
     * Add ingredientStepJoin
     *
     * @param \AppBundle\Entity\IngredientStepJoin $ingredientStepJoin
     *
     * @return Ingredient
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

    /**
     * Set type
     *
     * @param \AppBundle\Entity\IngredientType $type
     *
     * @return Ingredient
     */
    public function setType(\AppBundle\Entity\IngredientType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\IngredientType
     */
    public function getType()
    {
        return $this->type;
    }
}
