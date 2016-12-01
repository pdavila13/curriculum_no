<?php

namespace Scool\Curriculum\Providers;

use Illuminate\Support\ServiceProvider;
use Scool\Curriculum\ScoolCurriculum;

class CurriculumServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        if (!defined('SCOOL_CURRICULUM_PATH')) {
            define('SCOOL_CURRICULUM_PATH', realpath(__DIR__.'/../../'));
        }
    }

    /**
     *
     */
    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories();
    }

    /**
     *
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     *
     */
    private function publishFactories()
    {
        $this->publishes(
            ScoolCurriculum::factories(),"scool_curriculum"
        );
    }

    /**
     * Publish config.
     */
    private function publishConfig() {
        $this->publishes(
            ScoolCurriculum::configs(),"scool_curriculum"
        );
        $this->mergeConfigFrom(
            SCOOL_CURRICULUM_PATH . '/config/curriculum.php', 'scool_curriculum'
        );
    }
}