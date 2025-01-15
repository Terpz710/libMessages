<?php

declare(strict_types=1);

namespace terpz710\messages;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Messages {

    private string $message;

    public function __construct(Config $config, string $msgKey, array|string|null $tags = null, array|string|null $replacements = null) {
        $msg = $config->get($msgKey);

        if ($msg === null) {
            throw new MessageException("Message key '{$msgKey}' not found in the configuration...");
        }

        if ($tags !== null && $replacements !== null) {
            $tags = (array) $tags;
            $replacements = (array) $replacements;

            $msg = str_replace($tags, $replacements, $msg);
        }

        $this->message = TextFormat::colorize($msg);
    }

    public function __toString() : string{
        return $this->message;
    }
}