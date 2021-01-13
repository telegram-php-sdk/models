<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class DocumentMimeType
 * @package Infureal\Telegram\Enums
 *
 * @method static DocumentMimeType PDF()
 * @method static DocumentMimeType ZIP()
 */
class DocumentMimeType extends Enum {

    protected const PDF = 'application/pdf';
    protected const ZIP = 'application/zip';

}