<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class VideoMimeType
 * @package Infureal\Telegram\Enums
 *
 * @method static VideoMimeType HTML()
 * @method static VideoMimeType MP4()
 */
class VideoMimeType extends Enum {

    protected const HTML = 'text/html';
    protected const MP4 = 'video/mp4';

}