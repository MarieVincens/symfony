<?php

namespace App\Controller;

use App\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    /**
     * @Route("/tag/{id}", name="tag_show", requirements= {"id" = "\d+"}, methods={"GET"})
     */
    public function index(Tag $tag)
    {
        return $this->render('tag/show.html.twig', [
            'tag' => $tag,
        ]);
    }
}
