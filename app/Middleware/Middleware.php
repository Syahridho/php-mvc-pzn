<?php

namespace Syahridho\PhpMvc\Middleware;

interface Middleware
{
    function before(): void;
}