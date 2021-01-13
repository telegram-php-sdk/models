<?php


namespace Infureal\Telegram\Collections;


use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\User;

#[CollectionType(type: User::class)]
class UserCollection extends Collection {
}