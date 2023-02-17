<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('workflow_logs_table', function (Blueprint $table) {
            $table->id();
            $table->morphs('actorable');
            $table->morphs('subjectable');
            $table->string('workflow_name');
            $table->text('froms')->comment('from states');
            $table->text('tos')->comment('to states');
            $table->timestamps();
        });
    }
};
