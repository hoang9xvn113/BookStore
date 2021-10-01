<?php

namespace Core;

use Core\Exception\RouteNotFoundException;

class Router
{
    private array $routes;

    /**
     * Đây Phương thức đăng ký cho route
     * @param string $requestMethod Loại yêu cầu gửi đến route
     * @param string $route Tên của route
     * @param string $action Hành động trong route
     */
    public function register(string $requestMethod, string $route, callable|array $action): self
    {
        $this->routes[$requestMethod][$route] = $action;
        return $this;
    }


    /**
     * Đây là phương thức đăng ký route bằng get
     */
    public function get(string $route, callable|array $action): self
    {
        $this->register('get', $route, $action);
        return $this;
    }
    /**
     * Đây là phương thức đăng ký route bằng post
     */
    public function post(string $route, callable|array $action): self
    {
        $this->register('post', $route, $action);
        return $this;
    }
    /**
     * Đây là phương thức đăng ký route bằng post và get
     */
    public function any(string $route, callable|array $action): self
    {
        $this
        ->post($route, $action)
        ->get($route, $action);
        return $this;
    }

    public function routes(): array
    {
        return $this->routes;
    }

    /**
     * Đây là phương thức giúp Router nhận diện được Controller
     * @param string $requestUri là chuỗi xác định vị trí tài nguyên web
     * @param string $requestMethod là loại phương thức gửi
     * @throws RouteNotFoundException ngoại lệ xảy ra khi không tìm thấy route đăng ký
     */
    public function resolve(string $requestUri, string $requestMethod)
    {
        $params = explode('?', $requestUri);
        $route = $params[0] == '/' ? $params[0] : rtrim($params[0], '/');
        $data = count($params) == 2 ? Helper::getParams($params[1]) : [];
        $action = $this->routes[$requestMethod][$route] ?? null;
        $request = array_merge($data, $_POST, $_FILES);

        if (!$action) {
            throw new RouteNotFoundException;
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        [$class, $method] = $action;

        if (class_exists($class)) {
            $class = new $class;

            if (method_exists($class, $method)) {
                return call_user_func_array([$class, $method], [$request]);
            }
        }

        throw new RouteNotFoundException;
    }
}
