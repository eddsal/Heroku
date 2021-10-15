<?php

namespace ContainerNvR6ZPN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTarifAdminControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\TarifAdminController' shared autowired service.
     *
     * @return \App\Controller\Admin\TarifAdminController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/TarifAdminController.php';

        $container->services['App\\Controller\\Admin\\TarifAdminController'] = $instance = new \App\Controller\Admin\TarifAdminController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Admin\\TarifAdminController', $container));

        return $instance;
    }
}
