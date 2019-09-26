<?php
/**
 * Created by PhpStorm.
 * User: clouduser
 * Date: 9/26/19
 * Time: 11:55 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('base.html.twig');
    }
}