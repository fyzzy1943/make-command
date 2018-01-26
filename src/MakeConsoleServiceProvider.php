<?php
/**
 * Created by PhpStorm.
 * User: ins
 * Date: 2017/10/9
 * Time: 上午10:37
 */

namespace FyzzyMake;

use Illuminate\Support\ServiceProvider;
use FyzzyMake\Console\ModelMakeCommand;
use FyzzyMake\Console\RepositoryMakeCommand;
use FyzzyMake\Console\RequestRuleMakeCommand;
use FyzzyMake\Console\ServiceMakeCommand;
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
                RequestRuleMakeCommand::class,
            ]);
        }
    }

    public function register()
    {

    }
}
