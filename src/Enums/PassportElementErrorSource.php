<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class PassportElementErrorSource
 * @package Infureal\Telegram\Enums
 *
 * @method static PassportElementErrorSource DATA()
 * @method static PassportElementErrorSource FRONT_SIDE()
 * @method static PassportElementErrorSource REVERSE_SIDE()
 * @method static PassportElementErrorSource SELFIE()
 * @method static PassportElementErrorSource FILE()
 * @method static PassportElementErrorSource FILES()
 * @method static PassportElementErrorSource TRANSLATION_FILE()
 * @method static PassportElementErrorSource TRANSLATION_FILES()
 * @method static PassportElementErrorSource UNSPECIFIED()
 */
class PassportElementErrorSource extends Enum {

    protected const DATA = 'data';
    protected const FRONT_SIDE = 'front_side';
    protected const REVERSE_SIDE = 'reverse_side';
    protected const SELFIE = 'selfie';
    protected const FILE = 'file';
    protected const FILES = 'files';
    protected const TRANSLATION_FILE = 'translation_file';
    protected const TRANSLATION_FILES = 'translation_files';
    protected const UNSPECIFIED = 'unspecified';

}