<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;

class InlineQueryResultCachedAudio extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $audioFileId,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::AUDIO(), $id);
    }

    /**
     * @return string
     */
    public function getAudioFileId(): string {
        return $this->audioFileId;
    }

    /**
     * @param string $audioFileId
     * @return InlineQueryResultCachedAudio
     */
    public function setAudioFileId(string $audioFileId): InlineQueryResultCachedAudio {
        $this->audioFileId = $audioFileId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     * @return InlineQueryResultCachedAudio
     */
    public function setCaption(?string $caption): InlineQueryResultCachedAudio {
        $this->caption = $caption;
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
     * @return InlineQueryResultCachedAudio
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultCachedAudio {
        $this->parseMode = $parseMode;
        return $this;
    }

    /**
     * @return MessageEntityCollection|null
     */
    public function getCaptionEntities(): ?MessageEntityCollection {
        return $this->captionEntities;
    }

    /**
     * @param MessageEntityCollection|null $captionEntities
     * @return InlineQueryResultCachedAudio
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultCachedAudio {
        $this->captionEntities = $captionEntities;
        return $this;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup {
        return $this->replyMarkup;
    }

    /**
     * @param InlineKeyboardMarkup|null $replyMarkup
     * @return InlineQueryResultCachedAudio
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultCachedAudio {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }

    /**
     * @return InputMessageContent|null
     */
    public function getInputMessageContent(): ?InputMessageContent {
        return $this->inputMessageContent;
    }

    /**
     * @param InputMessageContent|null $inputMessageContent
     * @return InlineQueryResultCachedAudio
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultCachedAudio {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}