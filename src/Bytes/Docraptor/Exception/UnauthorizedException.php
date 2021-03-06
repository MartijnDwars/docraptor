<?php

namespace Bytes\Docraptor\Exception;

class UnauthorizedException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('The provided API key was incorrect.', 401);
    }
}