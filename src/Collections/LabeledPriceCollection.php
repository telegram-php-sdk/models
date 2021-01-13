<?php


namespace Infureal\Telegram\Collections;


use Infureal\Telegram\Attributes\CollectionType;
use Infureal\Telegram\Models\LabeledPrice;

#[CollectionType(type: LabeledPrice::class)]
class LabeledPriceCollection extends Collection {
}