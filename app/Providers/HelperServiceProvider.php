<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Helper;

class HelperServiceProvider extends ServiceProvider {

        /**
         * Bootstrap the application services.
         *
         * @return void
         */
        public function boot()
        {
                //
        }

        /**
         * Register the application services.
         *
         * @return void
         */
        public function register()
        {
                $this->app->singleton('App\Helpers\Contracts\HelperContract', function(){
              return new Helper();                                                                 });
        }

}

?>