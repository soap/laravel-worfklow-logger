<?php

namespace Soap\WorkflowLogger;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\WorkflowLogger\Commands\WorkflowLoggerCommand;

class WorkflowLoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('workflowlogger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_workflow_logs_table')
            ->hasCommand(WorkflowLoggerCommand::class);
    }
}
