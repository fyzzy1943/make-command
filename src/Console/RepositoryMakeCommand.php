<?php
/**
 * Created by PhpStorm.
 * User: ins
 * Date: 2017/9/29
 * Time: 下午5:22
 */

namespace FyzzyMake\Console;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class RepositoryMakeCommand extends GeneratorCommand
{
    protected $name = 'make:repository';

    protected $description = 'Create a new repository class.';

    protected $type = 'Repository';

    protected function getDefaultNamespace($rootNamespace)
    {
        $group = explode('/', str_replace('\\', '/', trim($this->argument('name'))))[0];

        return $rootNamespace.'\Modules\\'.$group.'\Repositories';
    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/repository.plain.stub';
    }

    protected function getNameInput()
    {
        $name = trim($this->argument('name'), " \t\n\r\0\x0B\\/");

        $name = str_replace('\\', '/', $name);

        $name = Str::contains($name, '/') ? mb_substr($name, mb_stripos($name, '/') + 1) : $name;

        return ends_with($name, $this->type) ? $name : $name.$this->type;
    }
}
