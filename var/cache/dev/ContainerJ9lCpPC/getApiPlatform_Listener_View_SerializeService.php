<?php

namespace ContainerJ9lCpPC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_SerializeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.serialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\SerializeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'SerializeListener.php';

        return $container->privates['api_platform.listener.view.serialize'] = new \ApiPlatform\Core\EventListener\SerializeListener(($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService()), ($container->privates['api_platform.serializer.context_builder.filter'] ?? $container->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}
