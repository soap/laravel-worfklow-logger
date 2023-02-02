<?php

namespace Soap\WorkflowLogger\Listeners;

use Illuminate\Support\Facades\Log;
use ZeroDaHero\LaravelWorkflow\Events\CompletedEvent;

class WorkflowSubscriber 
{

    /**
     * Listen for completed transition worklflow event
     * @param CompletedEvent $event 
     * @return void 
     */
    public function onCompleted(CompletedEvent $event)
    {
        /** Symfony\Component\Workflow\Event\CompletedEvent */
        
        $subject = $event->getSubject();
        
        $loggable_type = get_class($subject);
        $loggable_id = $subject->id;


    }
}