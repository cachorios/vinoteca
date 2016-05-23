<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 04/12/2014
 * Time: 22:41
 */

namespace AppBundle\Servicios\CacheWarmer;


use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmer;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

class AppCacheWarmer implements CacheWarmerInterface
{
    private $contenido;

    /**
     * Checks whether this warmer is optional or not.
     *
     * Optional warmers can be ignored on certain conditions.
     *
     * A warmer should return true if the cache can be
     * generated incrementally and on-demand.
     *
     * @return bool    true if the warmer is optional, false otherwise
     */
    public function isOptional()
    {
        return true;
    }


    public function setContenido($contenido){
        $this->contenido = $contenido;
    }
    /**
     * Warms up the cache.
     *
     * @param string $cacheDir The cache directory
     */
    public function warmUp($cacheDir)
    {
        $cacheContent = 'Content to be cached';

        // Stores the cache
        //ld($cacheDir);
        file_put_contents($cacheDir, $cacheContent);

    }
}