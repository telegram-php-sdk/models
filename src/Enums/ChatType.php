<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class ChatType
 * @package Infureal\Telegram\Enums
 *
 * @method static PRIVATE()
 * @method static GROUP()
 * @method static SUPERGROUP()
 * @method static CHANNEL()
 */
class ChatType extends Enum {

    protected const PRIVATE = 'private';
    protected const GROUP = 'group';
    protected const SUPERGROUP = 'supergroup';
    protected const CHANNEL = 'channel';

}