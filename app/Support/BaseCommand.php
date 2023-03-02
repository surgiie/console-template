<?php

namespace App\Support;

use Surgiie\Blade\Blade;
use Surgiie\Console\Command;

abstract class BaseCommand extends Command
{
    /**
     * Return the Blade instance for rendering files with.
     */
    protected function blade(): Blade
    {
        $blade = parent::blade();

        if ($this->app->runningUnitTests()) {
            $blade->setCompiledPath(base_path('tests/.compiled'));
        }

        return $blade;
    }
}
