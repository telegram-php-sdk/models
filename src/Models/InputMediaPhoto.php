<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InputMediaType;
use Infureal\Telegram\Enums\ParseMode;

class InputMediaPhoto extends InputMedia {

    public function __construct(
        string $media,
        ?string $caption = null,
        ?MessageEntityCollection $captionEntities = null,
        ?ParseMode $parseMode = null,
    ) {
        parent::__construct(InputMediaType::PHOTO(), $media, $caption, $captionEntities, $parseMode);
    }

}