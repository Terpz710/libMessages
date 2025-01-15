<?php

declare(strict_types=1);

namespace terpz710\messages;

use RuntimeException;

class MessageException extends RuntimeException {

    public function __construct(string $message, int $code = 0, ?\Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}