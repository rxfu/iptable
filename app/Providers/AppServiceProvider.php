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

			$routes = [
				[
					'href' => route('login'),
					'name' => '登录',
				],
				[
					'href' => route('register'),
					'name' => '注册',
				],
			];

			$view->with('menu', json_encode($routes));
		});
	}
}
