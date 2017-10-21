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
        $group = explode('/', str_replace('\\', '/', trim($this->argument('name'))))[0];

        return $rootNamespace.'\Modules\\'.$group.'\Models';
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/model.plain.stub';
    }

    protected function getNameInput()
    {
        $name = trim($this->argument('name'), " \t\n\r\0\x0B\\/");

        $name = str_replace('\\', '/', $name);

        $name = Str::contains($name, '/') ? mb_substr($name, mb_stripos($name, '/') + 1) : $name;

        return $name;
    }
}
