<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;
use Infureal\Telegram\Enums\VideoMimeType;

class InlineQueryResultCachedVideo extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $videoFileId,
        protected string $title,
        protected ?string $description = null,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::VIDEO(), $id);
    }

    /**
     * @return string
     */
    public function getVideoFileId(): string {
        return $this->videoFileId;
    }

    /**
     * @param string $videoFileId
     * @return InlineQueryResultCachedVideo
     */
    public function setVideoFileId(string $videoFileId): InlineQueryResultCachedVideo {
        $this->videoFileId = $videoFileId;
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
     * @return InlineQueryResultCachedVideo
     */
    public function setTitle(string $title): InlineQueryResultCachedVideo {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return InlineQueryResultCachedVideo
     */
    public function setDescription(?string $description): InlineQueryResultCachedVideo {
        $this->description = $description;
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
     * @return InlineQueryResultCachedVideo
     */
    public function setCaption(?string $caption): InlineQueryResultCachedVideo {
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
     * @return InlineQueryResultCachedVideo
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultCachedVideo {
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
     * @return InlineQueryResultCachedVideo
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultCachedVideo {
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
     * @return InlineQueryResultCachedVideo
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultCachedVideo {
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
     * @return InlineQueryResultCachedVideo
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultCachedVideo {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}