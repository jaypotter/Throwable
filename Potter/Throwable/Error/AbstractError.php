<?php

namespace Potter\Throwable\Error;

use Potter\Throwable\ThrowableTrait;

use \Error;

abstract class AbstractError extends Error implements ErrorInterface
{
    use ThrowableTrait;
}