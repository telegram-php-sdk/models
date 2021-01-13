<?php


namespace Infureal\Telegram\Collections;

use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\Sticker;

#[CollectionType(type: Sticker::class)]
class StickerCollection extends Collection {

}