<?php

namespace Core;

use Core\Exception\ViewNotFoundException;

class View
{
    public function __construct(
        protected string $view,
        protected array $params = []
    ) {
    }

    public static function make(string $view, array $params = [])
    {
        return new static($view, $params);
    }

    public function render() : string
    {
        $viewPath = VIEWS_PATH . '/' . $this->view . '.php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException;
        }

        foreach($this->params as $key=>$value) {
            $$key = $value;
        }

        ob_start();

        include_once $viewPath;

        return (string) ob_get_clean();
    }

    
    public function __toString()
    {
        return $this->render();
    }

    public  function __get($name)
    {
        return $this->params[$name] ?? null;
    }
}
