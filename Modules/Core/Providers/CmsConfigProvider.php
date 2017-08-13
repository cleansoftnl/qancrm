<?php
namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core;
use Cache;
use Config;
use Schema;
use DB;

class CmsConfigProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        if (Cache::has('core.config_table')) {
            $table = Cache::get('core.config_table');
        } else {
            // test for db connectivity
            try {
                DB::connection()->getDatabaseName();
            } catch (\PDOException $e) {
                return $e;
            }
            // make sure the config table is installed
            if (!Schema::hasTable(with(new \Modules\Core\Models\DBConfig())->table)) {
                return;
            }

            // cache the config table
            $table = Cache::rememberForever('core.config_table', function () {
                $allconfigitems = \Modules\Core\Models\DBConfig::orderBy('environment', 'asc')->get();
                return $allconfigitems;
            });
        }
        if ($table->count() == 0) {
            return;
        }
        // run over the environments and set the config vars
        foreach (['*', app()->environment()] as $env) {
            foreach ($table as $item) {
                // check if we have the right environment
                if ($item->environment != $env) {
                    continue;
                }
                // and then override it
                Config::set($item->key, $item->value);
            }
        }
    }
}
