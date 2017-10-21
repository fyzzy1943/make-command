<?php
/**
 * Created by PhpStorm.
 * User: ins
 * Date: 2017/9/21
 * Time: 17:02
 */

namespace FyzzyMake\Console;

use Illuminate\Filesystem\Filesystem;

class ControllerMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new controller class.';

    /**
     * The type of class being generator.
     *
     * @var string
     */
    protected $type = 'Controller';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers';
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/controller.plain.stub';
    }
}
