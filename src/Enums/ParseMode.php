<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class ParseMode
 * @package Infureal\Telegram\Enums
 *
 * @method static ParseMode MarkdownV2()
 * @method static ParseMode HTML()
 * @method static ParseMode Markdown()
 */
class ParseMode extends Enum {

    protected const MarkdownV2 = 'MarkdownV2';
    protected const HTML = 'HTML';
    protected const Markdown = 'Markdown';

}