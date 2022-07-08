<?php

namespace wizar\phpmvc\middlewares;

abstract class BaseMiddleware
{
    abstract public function execute();
}