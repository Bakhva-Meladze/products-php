<?php

namespace model;

use model\Products;


class Route
{
    public static $routes;

    public function get($url, $controller, $function)
    {
        $data['function'] = $function;
        $data['controller'] = $controller;
        self::$routes[$url] = $data;

    }

    public function post($url, $controller, $function)
    {
        $data['function'] = $function;
        $data['controller'] = $controller;
        $data['data'] = $_POST;
        self::$routes[$url] = $data;
    }

    public function run($path)
    {

        if (isset(self::$routes[$path])) {
            $controller = '\Controllers\\' . self::$routes[$path]['controller'];
            $function = self::$routes[$path]['function'];

            $object = new $controller();
            if (isset(self::$routes[$path]['data'])) {
                $post_data = self::$routes[$path]['data'];
                $object->$function($post_data);
            } else {
                $object->$function();
            }
            self::$routes[$path]['controller'];
        } else {
            if (file_exists('view/404.html')) {
                require 'view/404.html';
            }
        }
    }
}