<?php

namespace ContainerOJRYYZ4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeMigration_LazyService extends App_KernelDevContainer
{
    /*
     * Gets the private '.maker.auto_command.make_migration.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.maker.auto_command.make_migration.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:migration', [], 'Creates a new migration based on database changes', false, function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_migration'] ?? $container->load('getMaker_AutoCommand_MakeMigrationService'));
        });
    }
}
