<?php
/**
 * Created by PhpStorm.
 * User: ignas
 * Date: 17.10.19
 * Time: 13.29
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DatabaseController extends Controller
{
    /**
     * @Route("/save")
     */
    public function saveAction() {
        $category = new Category();
        $category->setTitle("Toothpaste");

        $product = new Product();
        $product->setTitle("Colgate");
        $product->setCategory($category);
        $product->setActive(TRUE);
        $product->setPrice("3.55");
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->render("blank.html.twig");
    }


    /**
     * @Route("/delete/{id}")
     * @ParamConverter("product", class="AppBundle:Product")
     */
    public function deleteAction(Product $product) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
        return $this->render("blank.html.twig");
    }
}