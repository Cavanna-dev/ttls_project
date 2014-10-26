<?php

namespace Ttls_project\UserPanelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/user")
 * @Template()
 */
class DefaultController extends Controller
{
    /**
     * @Route("/read")
     * @Template()
     */
    public function readAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        return array('user' => $user);
    }
}
