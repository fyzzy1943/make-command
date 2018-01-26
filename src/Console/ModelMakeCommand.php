<?php
/**
 * Created by PhpStorm.
 * User: ins
 * Date: 2017/9/29
 * Time: 下午5:55
 */

namespace FyzzyMake\Console;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class ModelMakeCommand extends GeneratorCommand
{
    protected $name = 'make:model';

    protected $description = 'Create a new model class.';

    protected $type = 'Model';

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Modules';
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/model.plain.stub';
    }

    protected function getNameInput()
    {
        $name = trim($this->argument('name'));
        $name = substr_replace(
            $name,
            '/' . $this->type,
            mb_stripos($name, '/'),
            0
        );

        return $name;
    }
}
