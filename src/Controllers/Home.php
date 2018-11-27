<?php

namespace Slimvc\Controller;

class Home extends BaseController
{
    /**
     * Constructer
     *
     * @param object $container
     */
    public function __construct($container) {
        parent::__construct($container);
    }

    public function home($request, $response, $args) {
        
        $data['name'] = 'world';

        return $this->container->view->render($response, 'index.twig', $data);
    }
}
