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

class RequestRuleMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:rule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new request rule class.';

    /**
     * The type of class being generator.
     *
     * @var string
     */
    protected $type = 'Rule';

    protected function getStub()
    {
        return __DIR__ . '/stubs/rule.plain.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\RequestRules';
    }
}
