<?php


namespace Infureal\Telegram\Collections;

use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\MessageEntity;

#[CollectionType(type: MessageEntity::class)]
class MessageEntityCollection extends Collection {
}