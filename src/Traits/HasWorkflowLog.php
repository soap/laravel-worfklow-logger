<?php

namespace Soap\WorkflowLogger\Traits;

use Soap\WorkflowLogger\Models\WorkflowLog;

trait HasWorkflowLog 
{
    /**
     * 
     * @return mixed 
     */
    public function workflowLogs()
    {
        return $this->morphMany(WorkflowLog::class, 'loggable');
    }
}