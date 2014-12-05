<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 04/12/2014
 * Time: 22:41
 */

namespace AppBundle\Servicios\CacheWarmer;


use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

class AppCacheWarmer implements CacheWarmerInterface
{

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
    /**
     * Warms up the cache.
     *
     * @param string $cacheDir The cache directory
     */
    public function warmUp($cacheDir)
    {
        // TODO: Implement warmUp() method.
        $cacheContent = 'Content to be cached';
        file_put_contents($cacheDir.'/miCache.php', $cacheContent);
    }
}