<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $images = array(
            '_MG_5585.jpg',
            '_MG_5618.jpg',
            '_MG_5613.jpg',
            '_MG_5645.jpg',
            '_MG_5652.jpg',
            '_MG_5615.jpg',
            '_MG_5655.jpg',
            '_MG_5679.jpg',
            '_MG_5681.jpg',
            '_MG_5684.jpg',
            '_MG_5694.jpg',
            '_MG_5712.jpg',
            '_MG_5731.jpg',
            '_MG_5740.jpg',
            '_MG_5748.jpg',
            '_MG_5753.jpg',
            '_MG_5775.jpg',
            '_MG_5780.jpg',            
            '_MG_5808.jpg',
            '_MG_5810.jpg',
        );

        return $this->render('default/index.html.twig', array(
            'images' => $images,
        ));
    }

    /**
     * @Route("gallery", name="gallery")
     */
    public function galleryAction(Request $request)
    {
        $images = array(
            '_MG_5585.jpg',
            '_MG_5618.jpg',
            '_MG_5613.jpg',
            '_MG_5645.jpg',
            '_MG_5652.jpg',
            '_MG_5615.jpg',
            '_MG_5655.jpg',
            '_MG_5679.jpg',
            '_MG_5681.jpg',
            '_MG_5684.jpg',
            '_MG_5694.jpg',
            '_MG_5712.jpg',
            '_MG_5731.jpg',
            '_MG_5740.jpg',
            '_MG_5748.jpg',
            '_MG_5753.jpg',
            '_MG_5775.jpg',
            '_MG_5780.jpg',            
            '_MG_5808.jpg',
            '_MG_5810.jpg',
        );

        return $this->render('default/gallery.html.twig', array(
            'images' => $images,
        ));
    }
}
