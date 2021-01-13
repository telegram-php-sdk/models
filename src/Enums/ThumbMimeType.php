<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class ThumbMimeType
 * @package Infureal\Telegram\Enums
 *
 * @method static ThumbMimeType JPEG()
 * @method static ThumbMimeType MP4()
 * @method static ThumbMimeType GIF()
 */
class ThumbMimeType extends Enum {

    protected const JPEG = 'image/jpeg';
    protected const MP4 = 'video/mp4';
    protected const GIF = 'image/gif';

}