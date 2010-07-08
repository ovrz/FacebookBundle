<?php

namespace Bundle\Kris\FacebookBundle;

use Symfony\Foundation\Bundle\Bundle;
use Symfony\Components\DependencyInjection\ContainerInterface;
use Symfony\Components\DependencyInjection\Loader\Loader;
use Bundle\Kris\FacebookBundle\DependencyInjection\FacebookExtension;

class FacebookBundle extends Bundle
{
    public function buildContainer(ContainerInterface $container)
    {
        Loader::registerExtension(new FacebookExtension());
    }
}
