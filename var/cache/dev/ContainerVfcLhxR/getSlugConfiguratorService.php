<?php

namespace ContainerVfcLhxR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSlugConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'SlugConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\SlugConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
