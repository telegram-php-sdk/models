<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\ParseMode;

class InputTextMessageContent extends InputMessageContent {

    public function __construct(
        protected string $messageText,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $entities = null,
        protected ?bool $disableWebPagePreview = null,
    ) {}

    /**
     * @return string
     */
    public function getMessageText(): string {
        return $this->messageText;
    }

    /**
     * @param string $messageText
     * @return InputTextMessageContent
     */
    public function setMessageText(string $messageText): InputTextMessageContent {
        $this->messageText = $messageText;
        return $this;
    }

    /**
     * @return ParseMode|null
     */
    public function getParseMode(): ?ParseMode {
        return $this->parseMode;
    }

    /**
     * @param ParseMode|null $parseMode
     * @return InputTextMessageContent
     */
    public function setParseMode(?ParseMode $parseMode): InputTextMessageContent {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @return MessageEntityCollection|null
     */
    public function getEntities(): ?MessageEntityCollection {
        return $this->entities;
    }

    /**
     * @param MessageEntityCollection|null $entities
     * @return InputTextMessageContent
     */
    public function setEntities(?MessageEntityCollection $entities): InputTextMessageContent {
        $this->entities = $entities;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDisableWebPagePreview(): ?bool {
        return $this->disableWebPagePreview;
    }

    /**
     * @param bool|null $disableWebPagePreview
     * @return InputTextMessageContent
     */
    public function setDisableWebPagePreview(?bool $disableWebPagePreview): InputTextMessageContent {
        $this->disableWebPagePreview = $disableWebPagePreview;
        return $this;
    }

}