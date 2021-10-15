<?php

namespace ContainerTWriEzL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yh33RNtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yh33RNt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yh33RNt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adresseRepository' => ['privates', 'App\\Repository\\AdresseRepository', 'getAdresseRepositoryService', true],
        ], [
            'adresseRepository' => 'App\\Repository\\AdresseRepository',
        ]);
    }
}
