<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace Blog\Controller;

use Core\Application\Controller\AbstractController;
use Blog\Helper\ContactHelper;

class ContactController extends AbstractController
{
    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ((!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])
                && !empty($_POST['subject']) && !empty($_POST['content']))) {
                $contactHelper = new ContactHelper();
                $post = $_POST;
                if ($contactHelper->processContactForm($post) === true) {
                    $this->addFlash('success', 'Message envoyé !');
                } else {
                    $this->addFlash('danger', 'Un problème est survenu, veuillez réessayer !');
                }
            } else {
                $this->addFlash('danger', 'Un problème est survenu, veuillez réessayer !');
            }
        }

        return $this->render('contact.html.twig', [
            'title' => 'Contact'
        ]);
    }
}