<?php

namespace Soap\WorkflowLogger\Traits;

use Soap\WorkflowLogger\Models\WorkflowLog;

trait CanBeWorkflowActor 
{
    /**
     * 
     * @return mixed 
     */
    public function actionLogs()
    {
        return $this->morphMany(WorkflowLog::class, 'actable');
    }
}