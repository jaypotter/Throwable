<?php

namespace Potter\Throwable\Exception;

use Potter\Throwable\{
    ThrowableInterface,
    ThrowableTrait
};

use \Exception;

abstract class AbstractException extends Exception implements ThrowableInterface
{
    use ThrowableTrait;
}