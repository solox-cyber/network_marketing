<?php

if (!function_exists('set_active_route')) {
    function set_active_route($route)
    {
        return Route::currentRouteName() === $route ? 'active' : '';
    }
}
