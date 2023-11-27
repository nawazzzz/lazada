<?php

namespace Laraditz\Lazada\Exceptions;

use Exception;
use Throwable;

class LazadaTokenException extends Exception
{
    public function __construct(
        string $message = 'Access token created error.',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
