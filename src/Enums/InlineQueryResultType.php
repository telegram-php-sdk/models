<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class InlineQueryResultType
 * @package Infureal\Telegram\Enums
 *
 * @method static InlineQueryResultType ARTICLE()
 * @method static InlineQueryResultType PHOTO()
 * @method static InlineQueryResultType GIF()
 * @method static InlineQueryResultType MPEG4GIF()
 * @method static InlineQueryResultType VIDEO()
 * @method static InlineQueryResultType AUDIO()
 * @method static InlineQueryResultType VOICE()
 * @method static InlineQueryResultType DOCUMENT()
 * @method static InlineQueryResultType LOCATION()
 * @method static InlineQueryResultType VENUE()
 * @method static InlineQueryResultType CONTACT()
 * @method static InlineQueryResultType GAME()
 * @method static InlineQueryResultType STICKER()
 */
class InlineQueryResultType extends Enum {

    protected const ARTICLE = 'article';
    protected const PHOTO = 'photo';
    protected const GIF = 'gif';
    protected const MPEG4GIF = 'mpeg4_gif';
    protected const VIDEO = 'video';
    protected const AUDIO = 'audio';
    protected const VOICE = 'voice';
    protected const DOCUMENT = 'document';
    protected const LOCATION = 'location';
    protected const VENUE = 'venue';
    protected const CONTACT = 'contact';
    protected const GAME = 'game';
    protected const STICKER = 'sticker';

}