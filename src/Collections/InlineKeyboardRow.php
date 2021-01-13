<?php


namespace Infureal\Telegram\Collections;


use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\InlineKeyboardButton;

#[CollectionType(type: InlineKeyboardButton::class)]
class InlineKeyboardRow extends Collection {
}