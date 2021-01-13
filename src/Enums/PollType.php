<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class PollType
 * @package Infureal\Telegram\Enums
 *
 * @method static PollType REGULAR()
 * @method static PollType QUIZ()
 */
class PollType extends Enum {

    protected const REGULAR = 'regular';
    protected const QUIZ = 'quiz';

}