<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class InputMediaType
 * @package Infureal\Telegram\Enums
 *
 * @method static InputMediaType PHOTO()
 * @method static InputMediaType VIDEO()
 * @method static InputMediaType ANIMATION()
 * @method static InputMediaType AUDIO()
 * @method static InputMediaType DOCUMENT()
 */
class InputMediaType extends Enum {

    protected const PHOTO = 'photo';
    protected const VIDEO = 'video';
    protected const ANIMATION = 'animation';
    protected const AUDIO = 'audio';
    protected const DOCUMENT = 'document';

}