<?php
/**
 * Created by PhpStorm.
 * User: ins
 * Date: 2017/9/21
 * Time: 17:02
 */

namespace FyzzyMake\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

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

    public function fire()
    {
        if (false == parent::fire()) {
            return;
        }

        if ($this->option('service') || $this->option('all')) {
            $this->createService();
        }

        if ($this->option('repository') || $this->option('all')) {
            $this->createRepository();
        }

        if ($this->option('model') || $this->option('all')) {
            $this->createModel();
        }
    }

    /**
     * Create a service file for the model.
     *
     * @return void
     */
    protected function createService()
    {
//        $name = $this->getNameInput();
//
//
//
//        if (ends_with($name, $this->type)) {
//            $baseName = str_replace_last($this->type, '', $name);
//            dd($baseName);
//        }
//
//        $a = class_basename($this->argument('name'));
//        var_dump($a);
//        $controller = Str::studly($a);
//        dd($controller);
    }

    /**
     * Create a repository file for the model.
     *
     * @return void
     */
    protected function createRepository()
    {

    }

    /**
     * Create a model file for the model.
     *
     * @return void
     */
    protected function createModel()
    {

    }

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

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['all', 'a', InputOption::VALUE_NONE,
                'Create new service, repository, model file for the controller.'],

            ['service', 's', InputOption::VALUE_NONE,
                'Create a new service file for the controller.'],

            ['repository', 'r', InputOption::VALUE_NONE,
                'Create a new repository file for the controller.'],

            ['model', 'm', InputOption::VALUE_NONE,
                'Create a new model file for the controller.'],
        ];
    }
}
