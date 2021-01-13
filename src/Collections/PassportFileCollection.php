<?php


namespace Infureal\Telegram\Collections;


use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\PassportFile;

#[CollectionType(type: PassportFile::class)]
class PassportFileCollection extends Collection {
}