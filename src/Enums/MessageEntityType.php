<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class MessageEntityType
 * @package Infureal\Telegram\Enums
 *
 * @method static MessageEntityType MENTION()
 * @method static MessageEntityType HASHTAG()
 * @method static MessageEntityType CASHTAG()
 * @method static MessageEntityType BOT_COMMAND()
 * @method static MessageEntityType URL()
 * @method static MessageEntityType EMAIL()
 * @method static MessageEntityType PHONE_NUMBER()
 * @method static MessageEntityType BOLD()
 * @method static MessageEntityType ITALIC()
 * @method static MessageEntityType UNDERLINE()
 * @method static MessageEntityType STRIKETHROUGH()
 * @method static MessageEntityType CODE()
 * @method static MessageEntityType PRE()
 * @method static MessageEntityType TEXT_LINK()
 * @method static MessageEntityType TEXT_MENTION()
 */
class MessageEntityType extends Enum {

    protected const MENTION = 'mention';
    protected const HASHTAG = 'hashtag';
    protected const CASHTAG = 'cashtag';
    protected const BOT_COMMAND = 'bot_command';
    protected const URL = 'url';
    protected const EMAIL = 'email';
    protected const PHONE_NUMBER = 'phone_number';
    protected const BOLD = 'bold';
    protected const ITALIC = 'italic';
    protected const UNDERLINE = 'underline';
    protected const STRIKETHROUGH = 'strikethrough';
    protected const CODE = 'code';
    protected const PRE = 'pre';
    protected const TEXT_LINK = 'text_link';
    protected const TEXT_MENTION = 'text_mention';

}