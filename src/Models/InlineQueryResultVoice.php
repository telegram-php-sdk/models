<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;

class InlineQueryResultVoice extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $voiceUrl,
        protected string $title,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?int $voiceDuration = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::VOICE(), $id);
    }

    /**
     * @return string
     */
    public function getVoiceUrl(): string {
        return $this->voiceUrl;
    }

    /**
     * @param string $voiceUrl
     * @return InlineQueryResultVoice
     */
    public function setVoiceUrl(string $voiceUrl): InlineQueryResultVoice {
        $this->voiceUrl = $voiceUrl;
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
     * @return InlineQueryResultVoice
     */
    public function setTitle(string $title): InlineQueryResultVoice {
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
     * @return InlineQueryResultVoice
     */
    public function setCaption(?string $caption): InlineQueryResultVoice {
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
     * @return InlineQueryResultVoice
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultVoice {
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
     * @return InlineQueryResultVoice
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultVoice {
        $this->captionEntities = $captionEntities;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVoiceDuration(): ?int {
        return $this->voiceDuration;
    }

    /**
     * @param int|null $voiceDuration
     * @return InlineQueryResultVoice
     */
    public function setVoiceDuration(?int $voiceDuration): InlineQueryResultVoice {
        $this->voiceDuration = $voiceDuration;
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
     * @return InlineQueryResultVoice
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultVoice {
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
     * @return InlineQueryResultVoice
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultVoice {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}