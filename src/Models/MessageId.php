<?php


namespace Infureal\Telegram\Models;


class MessageId extends Model {

    public function __construct(
        protected int $messageId,
    ) {}

    /**
     * @return int
     */
    public function getMessageId(): int {
        return $this->messageId;
    }

    /**
     * @param int $messageId
     * @return MessageId
     */
    public function setMessageId(int $messageId): MessageId {
        $this->messageId = $messageId;
        return $this;
    }

}