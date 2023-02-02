<?php

namespace Soap\WorkflowLogger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\WorkflowLogger\WorkflowLogger
 */
class WorkflowLogger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\WorkflowLogger\WorkflowLogger::class;
    }
}
