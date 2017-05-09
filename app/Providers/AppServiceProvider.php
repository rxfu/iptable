<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {

		View::composer('*', function ($view) {

			$items = config('setting.navbar');
			array_walk_recursive($items, function (&$item, $key) {
				if ('url' == $key) {
					$item = route($item);
				}
			});

			$view->with('items', $items);
		});
	}
}
