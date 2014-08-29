<?php

namespace Bolt\Filesystem;

use Bolt\Application;
use League\Flysystem\Adapter\Local as FilesystemAdapter;
use League\Flysystem\Filesystem;
use League\Flysystem\MountManager;

/**
*
*/
class Manager extends MountManager
{
    public $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->mountFilesystem('default', new Filesystem(new FilesystemAdapter($app['resources']->getPath('files'))));
        $this->mountFilesystem('files', new Filesystem(new FilesystemAdapter($app['resources']->getPath('files'))));
        $this->mountFilesystem('config', new Filesystem(new FilesystemAdapter($app['resources']->getPath('config'))));
        $this->mountFilesystem('theme', new Filesystem(new FilesystemAdapter($app['resources']->getPath('themebase'))));
        $this->initManagers();
    }

    public function initManagers()
    {
        foreach ($this->filesystems as $namespace => $manager) {
            $this->initManager($namespace, $manager);
        }
    }

    public function initManager($namespace, $manager)
    {
        $manager->addPlugin(new SearchPlugin);
        $manager->addPlugin(new BrowsePlugin);
        $manager->addPlugin(new PublicUrlPlugin($this->app, $namespace));
        $manager->addPlugin(new ThumbnailUrlPlugin($this->app, $namespace));
    }

    public function getManager($namespace = null)
    {
        if (isset($this->filesystems[$namespace])) {
            return $this->getFilesystem($namespace);
        } else {
            return $this->getFilesystem('files');
        }
    }

    public function setManager($namespace, $manager)
    {
        $this->mountFilesystem($namespace, $manager);
        $this->initManager($namespace, $manager);
    }

    /**
     * By default we forward anything called on this class to the default manager
     *
     * @return void
     **/
    public function __call($method, $arguments)
    {
        $callback = array($this->getManager(), $method);

        return call_user_func_array($callback, $arguments);
    }
}
