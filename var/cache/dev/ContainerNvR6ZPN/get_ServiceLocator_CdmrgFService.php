<?php

namespace ContainerNvR6ZPN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CdmrgFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Cdmrg_f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Cdmrg_f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'payement' => ['privates', 'App\\Services\\Payement', 'getPayementService', true],
            'voyageRepository' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'payement' => 'App\\Services\\Payement',
            'voyageRepository' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}
