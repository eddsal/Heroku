<?php

namespace ContainerNvR6ZPN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VBKu2hdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vBKu2hd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vBKu2hd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rep' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'rep' => 'App\\Repository\\UserRepository',
        ]);
    }
}
