<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            new AppBundle\AppBundle(),

            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
                        
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),

            new RaulFraile\Bundle\LadybugBundle\RaulFraileLadybugBundle(),
            new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new WhiteOctober\BreadcrumbsBundle\WhiteOctoberBreadcrumbsBundle(),

            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),

            new Gregwar\ImageBundle\GregwarImageBundle(),
            new FOS\UserBundle\FOSUserBundle(),

            new RBSoft\UsuarioBundle\UsuarioBundle(),
            new RBSoft\ABMGeneradorBundle\RBSoftABMGeneradorBundle(),
            new RBSoft\UtilidadBundle\UtilidadBundle(),

            new RBSoft\CartBundle\RBSoftCartBundle(),
//            new UserAdminBundle\UserAdminBundle(),
            
            
        );

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
//            $bundles[] = new JMS\TranslationBundle\JMSTranslationBundle();

        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
