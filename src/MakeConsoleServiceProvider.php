<?php
/**
 * Created by PhpStorm.
 * User: ins
 * Date: 2017/10/9
 * Time: 上午10:37
 */

namespace FyzzyMake;

use FyzzyMake\Console\ModelMakeCommand;
use FyzzyMake\Console\RepositoryMakeCommand;
use FyzzyMake\Console\ServiceMakeCommand;
use Illuminate\Support\ServiceProvider;
use FyzzyMake\Console\ControllerMakeCommand;

class MakeConsoleServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ControllerMakeCommand::class,
                ServiceMakeCommand::class,
                RepositoryMakeCommand::class,
                ModelMakeCommand::class,
            ]);
        }
    }

    public function register()
    {

    }
}
