<?php

namespace Ttls_project\AdminPanelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

    /**
     * @Template()
     */
class AdminController extends Controller
{
    /**
     * @Route("/home")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        return array('user' => $user);
    }
    
    /**
     * @Route("/homepage")
     * @Template()
     */
    public function HomePageAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        return array('user' => $user);
    }

}
