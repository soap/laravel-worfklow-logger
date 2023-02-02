<?php

namespace Soap\WorkflowLogger\Commands;

use Illuminate\Console\Command;

class WorkflowLoggerCommand extends Command
{
    public $signature = 'workflowlogger';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
