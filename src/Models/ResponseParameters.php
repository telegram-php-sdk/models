<?php


namespace Infureal\Telegram\Models;


class ResponseParameters extends Model {

    public function __construct(
        protected ?int $migrateToChatId = null,
        protected ?int $retryAfter = null,
    ) {}

}