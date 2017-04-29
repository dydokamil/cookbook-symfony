<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Recipe
 *
 * @ORM\Table(name="recipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecipeRepository")
 */
class Recipe
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000)
     */
    private $description;

    /**
     * One Recipe has Many Steps.
     * @ORM\OneToMany(targetEntity="RecipeStep", mappedBy="recipe")
     */
    private $recipe_steps;

    public function __construct() {
        $this->steps = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\File(mimeTypes={ "image/png" })
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
     * @return Recipe
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
     * Set description
     *
     * @param string $description
     *
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add recipeStep
     *
     * @param \AppBundle\Entity\RecipeStep $recipeStep
     *
     * @return Recipe
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
}
