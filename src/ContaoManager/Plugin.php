<?php
namespace LumturoNet\ContaoGlossarBundle\ContaoManager;

use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class Plugin implements RoutingPluginInterface
{
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        $file = __DIR__ . '/../Resources/config/routing.yaml';

        return $resolver->resolve($file)->load($file);
    }
}
