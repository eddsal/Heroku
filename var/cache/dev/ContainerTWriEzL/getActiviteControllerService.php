<?php

namespace ContainerTWriEzL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActiviteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Front\ActiviteController' shared autowired service.
     *
     * @return \App\Controller\Front\ActiviteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Front/ActiviteController.php';

        $container->services['App\\Controller\\Front\\ActiviteController'] = $instance = new \App\Controller\Front\ActiviteController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Front\\ActiviteController', $container));

        return $instance;
    }
}
