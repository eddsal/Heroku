<?php

namespace ContainerNvR6ZPN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AJlQZzOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aJlQZzO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aJlQZzO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paysRepository' => ['privates', 'App\\Repository\\PaysRepository', 'getPaysRepositoryService', true],
        ], [
            'paysRepository' => 'App\\Repository\\PaysRepository',
        ]);
    }
}
