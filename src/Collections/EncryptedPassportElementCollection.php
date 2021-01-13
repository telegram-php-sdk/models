<?php


namespace Infureal\Telegram\Collections;


use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\EncryptedPassportElement;

#[CollectionType(type: EncryptedPassportElement::class)]
class EncryptedPassportElementCollection extends Collection {
}