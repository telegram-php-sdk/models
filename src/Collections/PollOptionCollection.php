<?php


namespace Infureal\Telegram\Collections;

use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\PollOption;

#[CollectionType(type: PollOption::class)]
class PollOptionCollection extends Collection {
}