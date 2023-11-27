<?php

namespace Laraditz\Lazada\Exceptions;

use Exception;
use Throwable;

class LazadaException extends Exception
{
    public function __construct(
        string $message = 'Lazada Exception.',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
