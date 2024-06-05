<?php

namespace ContainerNjdhPJf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PNxXnNpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pNxXnNp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pNxXnNp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminCategoriesController::edit' => ['privates', '.service_locator.uSGXe_N', 'get_ServiceLocator_USGXeNService', true],
            'App\\Controller\\Admin\\AdminCategoriesController::suppr' => ['privates', '.service_locator.uSGXe_N', 'get_ServiceLocator_USGXeNService', true],
            'App\\Controller\\Admin\\AdminFormationController::edit' => ['privates', '.service_locator.Y6JER91', 'get_ServiceLocator_Y6JER91Service', true],
            'App\\Controller\\Admin\\AdminFormationController::suppr' => ['privates', '.service_locator.Y6JER91', 'get_ServiceLocator_Y6JER91Service', true],
            'App\\Controller\\Admin\\AdminPlaylistsController::edit' => ['privates', '.service_locator.8rewS3E', 'get_ServiceLocator_8rewS3EService', true],
            'App\\Controller\\Admin\\AdminPlaylistsController::suppr' => ['privates', '.service_locator.8rewS3E', 'get_ServiceLocator_8rewS3EService', true],
            'App\\Controller\\OAuthController::connectCheckAction' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'App\\Controller\\OAuthController::index' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\AdminCategoriesController:edit' => ['privates', '.service_locator.uSGXe_N', 'get_ServiceLocator_USGXeNService', true],
            'App\\Controller\\Admin\\AdminCategoriesController:suppr' => ['privates', '.service_locator.uSGXe_N', 'get_ServiceLocator_USGXeNService', true],
            'App\\Controller\\Admin\\AdminFormationController:edit' => ['privates', '.service_locator.Y6JER91', 'get_ServiceLocator_Y6JER91Service', true],
            'App\\Controller\\Admin\\AdminFormationController:suppr' => ['privates', '.service_locator.Y6JER91', 'get_ServiceLocator_Y6JER91Service', true],
            'App\\Controller\\Admin\\AdminPlaylistsController:edit' => ['privates', '.service_locator.8rewS3E', 'get_ServiceLocator_8rewS3EService', true],
            'App\\Controller\\Admin\\AdminPlaylistsController:suppr' => ['privates', '.service_locator.8rewS3E', 'get_ServiceLocator_8rewS3EService', true],
            'App\\Controller\\OAuthController:connectCheckAction' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'App\\Controller\\OAuthController:index' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\AdminCategoriesController::edit' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController::suppr' => '?',
            'App\\Controller\\Admin\\AdminFormationController::edit' => '?',
            'App\\Controller\\Admin\\AdminFormationController::suppr' => '?',
            'App\\Controller\\Admin\\AdminPlaylistsController::edit' => '?',
            'App\\Controller\\Admin\\AdminPlaylistsController::suppr' => '?',
            'App\\Controller\\OAuthController::connectCheckAction' => '?',
            'App\\Controller\\OAuthController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController:edit' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController:suppr' => '?',
            'App\\Controller\\Admin\\AdminFormationController:edit' => '?',
            'App\\Controller\\Admin\\AdminFormationController:suppr' => '?',
            'App\\Controller\\Admin\\AdminPlaylistsController:edit' => '?',
            'App\\Controller\\Admin\\AdminPlaylistsController:suppr' => '?',
            'App\\Controller\\OAuthController:connectCheckAction' => '?',
            'App\\Controller\\OAuthController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
