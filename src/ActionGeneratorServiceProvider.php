<?php

namespace TimWassenburg\ActionGenerator;

use Illuminate\Support\ServiceProvider;
use TimWassenburg\ActionGenerator\Console\MakeAction;
use TimWassenburg\ActionGenerator\Console\MakeModel;

class ActionGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeAction::class,
                MakeModel::class
            ]);
        }
    }
}
