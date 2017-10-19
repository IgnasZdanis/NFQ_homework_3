<?php
/**
 * Created by PhpStorm.
 * User: ignas
 * Date: 17.10.19
 * Time: 11.11
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;
    /**
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    /**
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;
    /**
     * @ORM\Column(name="category_id", type="integer")
     */
    private $category_id;
    /**
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;
}