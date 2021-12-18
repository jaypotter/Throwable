<?php

namespace Potter\Throwable\Error;

use Potter\Throwable\{
    ThrowableInterface,
    ThrowableTrait
};

use \Error;

abstract class AbstractError extends Error implements ThrowableInterface
{
    use ThrowableTrait;
}