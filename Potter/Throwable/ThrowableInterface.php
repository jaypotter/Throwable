<?php

namespace Potter\Throwable;

use \Throwable;

interface ThrowableInterface extends Throwable
{
    /**
     * public getMessage(): string
     * public getCode(): int
     * public getFile(): string
     * public getLine(): int
     * public getTrace(): array
     * public getTraceAsString(): string
     * public getPrevious(): ?Throwable
     * abstract public __toString(): string
     */
}