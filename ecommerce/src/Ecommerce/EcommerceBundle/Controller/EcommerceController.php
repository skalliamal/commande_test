<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;

class EcommerceController extends Controller
{
    public function ajout_produitAction()
    {
        $em=$this->getDoctrine()->getManager();

       /* $produit = new Produits();

        $produit->setNom('Tomate');
        $produit->setDescription('la tomate ce mange');
        $produit->setDisponible('1');
        $produit->setCategorie('Legume');
        $produit->setImage('http://redbajas.com/public/frontend/files/FRUTAS%20-%20VEGETALES/tomate%20ensalada.jpg');
        $produit->setTva('20');
        $produit->setPrix('0.5');

        $em->persist($produit);
        $em->flush();


        $em=$this->getDoctrine()->getManager();
        $produit2 = new Produits();

        $produit2->setNom('Concombre');
        $produit2->setDescription('lE concombre ce mange');
        $produit2->setDisponible('1');
        $produit2->setCategorie('Legume');
        $produit2->setImage('http://img-3.journaldesfemmes.com/ov22esa_6QehxsFs7mi2QtdfFOE=/910x607/smart/46dbda9272fb4f74bb89fda8c58f61b1/ccmcms-jdf/10659242.jpg');
        $produit2->setTva('20');
        $produit2->setPrix('0.5');

        $em->persist($produit2);
        $em->flush();*/
       $produit=$em->getRepository(  'EcommerceBundle:Produits')->findAll();



        return $this->render('EcommerceBundle:Default:ajout_produit.html.twig',array('produits'=>$produit));
    }
}
