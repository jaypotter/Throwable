<?php

namespace Potter\Throwable\Exception;

use Potter\Throwable\ThrowableTrait;

use \Exception;

abstract class AbstractException extends Exception implements ThrowableInterface
{
    use ThrowableTrait;
}