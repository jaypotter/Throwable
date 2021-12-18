<?php

namespace Potter\Throwable;

use \Error;

abstract class AbstractError extends Error implements ThrowableInterface
{
    use ThrowableTrait;
}