<?php


namespace Infureal\Telegram\Collections;

use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\PhotoSize;

#[CollectionType(type: PhotoSize::class)]
class PhotoSizeCollection extends Collection {
}