<?php

namespace Slimvc\Model;

use Psr\Container\ContainerInterface;

class BaseModel
{
    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }
}