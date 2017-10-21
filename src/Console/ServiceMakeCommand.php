<?php
/**
 * Created by PhpStorm.
 * User: ins
 * Date: 2017/9/29
 * Time: 下午4:38
 */

namespace FyzzyMake\Console;

class ServiceMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class.';

    /**
     * The type of class being generator.
     *
     * @var string
     */
    protected $type = 'Service';

    protected function getStub()
    {
        return __DIR__ . '/stubs/service.plain.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Services';
    }
}
