<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;

class InlineQueryResultCachedVoice extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $voiceFileId,
        protected string $title,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::VOICE(), $id);
    }

    /**
     * @return string
     */
    public function getVoiceFileId(): string {
        return $this->voiceFileId;
    }

    /**
     * @param string $voiceFileId
     * @return InlineQueryResultCachedVoice
     */
    public function setVoiceFileId(string $voiceFileId): InlineQueryResultCachedVoice {
        $this->voiceFileId = $voiceFileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return InlineQueryResultCachedVoice
     */
    public function setTitle(string $title): InlineQueryResultCachedVoice {
        $this->title = $title;
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
     * @return InlineQueryResultCachedVoice
     */
    public function setCaption(?string $caption): InlineQueryResultCachedVoice {
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
     * @return InlineQueryResultCachedVoice
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultCachedVoice {
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
     * @return InlineQueryResultCachedVoice
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultCachedVoice {
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
     * @return InlineQueryResultCachedVoice
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultCachedVoice {
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
     * @return InlineQueryResultCachedVoice
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultCachedVoice {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}