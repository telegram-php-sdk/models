<?php


namespace Infureal\Telegram\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class ChatMemberStatus
 * @package Infureal\Telegram\Enums
 *
 * @method static ChatMemberStatus CREATOR()
 * @method static ChatMemberStatus ADMINISTRATOR()
 * @method static ChatMemberStatus MEMBER()
 * @method static ChatMemberStatus RESTRICTED()
 * @method static ChatMemberStatus LEFT()
 * @method static ChatMemberStatus KICKED()
 */
class ChatMemberStatus extends Enum {

    protected const CREATOR = 'creator';
    protected const ADMINISTRATOR = 'administrator';
    protected const MEMBER = 'member';
    protected const RESTRICTED = 'restricted';
    protected const LEFT = 'left';
    protected const KICKED = 'kicked';

}