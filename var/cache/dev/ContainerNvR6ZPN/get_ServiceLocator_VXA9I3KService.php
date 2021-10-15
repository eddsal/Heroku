<?php

namespace ContainerNvR6ZPN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VXA9I3KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vXA9I3K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vXA9I3K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activite' => ['privates', '.errored..service_locator.vXA9I3K.App\\Entity\\Activite', NULL, 'Cannot autowire service ".service_locator.vXA9I3K": it references class "App\\Entity\\Activite" but no such service exists.'],
            'activiteRepository' => ['privates', 'App\\Repository\\ActiviteRepository', 'getActiviteRepositoryService', true],
            'favorieRepository' => ['privates', 'App\\Repository\\FavorieRepository', 'getFavorieRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'paysRepository' => ['privates', 'App\\Repository\\PaysRepository', 'getPaysRepositoryService', true],
            'saisonRepository' => ['privates', 'App\\Repository\\SaisonRepository', 'getSaisonRepositoryService', true],
            'voyageRepository' => ['privates', 'App\\Repository\\VoyageRepository', 'getVoyageRepositoryService', true],
        ], [
            'activite' => 'App\\Entity\\Activite',
            'activiteRepository' => 'App\\Repository\\ActiviteRepository',
            'favorieRepository' => 'App\\Repository\\FavorieRepository',
            'paginator' => '?',
            'paysRepository' => 'App\\Repository\\PaysRepository',
            'saisonRepository' => 'App\\Repository\\SaisonRepository',
            'voyageRepository' => 'App\\Repository\\VoyageRepository',
        ]);
    }
}
