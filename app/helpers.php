<?php

/**
* @param $title
* @return Le titre de la page si celui ci est définit, sinon retour le titre de base.
*/
if(!function_exists('page_title')) {
	function page_title($title)
	{
		$base_title = config('app.name') .' - List of artisans';

		if ($title === '') {
			return $base_title;
		} else {
			return $title . ' | ' . $base_title;
		}
	}
}

/**
* @param $route
* @return la classe link-active si la route sélectionnée est la route en cours.
*/
if(!function_exists('set_active_route')) {
	function set_active_route($route)
	{
		return Route::is($route) ? ' link-active' : '';
	}
}