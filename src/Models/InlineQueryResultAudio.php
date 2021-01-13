<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;

class InlineQueryResultAudio extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $audioUrl,
        protected string $title,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?string $performer = null,
        protected ?int $audioDuration = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::AUDIO(), $id);
    }

    /**
     * @return string
     */
    public function getAudioUrl(): string {
        return $this->audioUrl;
    }

    /**
     * @param string $audioUrl
     * @return InlineQueryResultAudio
     */
    public function setAudioUrl(string $audioUrl): InlineQueryResultAudio {
        $this->audioUrl = $audioUrl;
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
     * @return InlineQueryResultAudio
     */
    public function setTitle(string $title): InlineQueryResultAudio {
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
     * @return InlineQueryResultAudio
     */
    public function setCaption(?string $caption): InlineQueryResultAudio {
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
     * @return InlineQueryResultAudio
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultAudio {
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
     * @return InlineQueryResultAudio
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultAudio {
        $this->captionEntities = $captionEntities;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPerformer(): ?string {
        return $this->performer;
    }

    /**
     * @param string|null $performer
     * @return InlineQueryResultAudio
     */
    public function setPerformer(?string $performer): InlineQueryResultAudio {
        $this->performer = $performer;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAudioDuration(): ?int {
        return $this->audioDuration;
    }

    /**
     * @param int|null $audioDuration
     * @return InlineQueryResultAudio
     */
    public function setAudioDuration(?int $audioDuration): InlineQueryResultAudio {
        $this->audioDuration = $audioDuration;
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
     * @return InlineQueryResultAudio
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultAudio {
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
     * @return InlineQueryResultAudio
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultAudio {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}