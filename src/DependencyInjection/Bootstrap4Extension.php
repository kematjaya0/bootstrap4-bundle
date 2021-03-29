<?php

/**
 * This file is part of the bootstrap4-bundle.
 */

namespace kematjaya\Bootstrap4Bundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\Config\FileLocator;

/**
 * @package kematjaya\Bootstrap4Bundle\DependencyInjection
 * @license https://opensource.org/licenses/MIT MIT
 * @author  Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Bootstrap4Extension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
                    $container, 
                    new FileLocator(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Resources/config')
                );
        $loader->load('services.yaml');
    }
}
