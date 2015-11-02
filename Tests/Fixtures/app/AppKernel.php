<?php

/**
 * AppKernel for test purpose.
 *
 * @author Pierre Feyssaguet <pfeyssaguet@gmail.com>
 * @since 26/04/2015 10:46
 */


use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
	public function registerBundles()
	{
		return array(
			new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
			new Symfony\Bundle\TwigBundle\TwigBundle(),
			new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
			new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle(),
			new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
			new DspSofts\CronManagerBundle\DspSoftsCronManagerBundle(),
		);
	}

	public function registerContainerConfiguration(LoaderInterface $loader)
	{
		$loader->load(__DIR__.'/config/config_test.yml');
	}

	/**
	 * @return string
	 */
	public function getCacheDir()
	{
		$cacheDir = sys_get_temp_dir().'/cache';
		if (!is_dir($cacheDir)) {
			mkdir($cacheDir, 0777, true);
		}

		return $cacheDir;
	}

	/**
	 * @return string
	 */
	public function getLogDir()
	{
		$logDir = sys_get_temp_dir().'/logs';
		if (!is_dir($logDir)) {
			mkdir($logDir, 0777, true);
		}

		return $logDir;
	}
}