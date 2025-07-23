<?php

namespace Contracts\Responses;

abstract class ApiResponse
{
    abstract public function toArray(): array;
}
