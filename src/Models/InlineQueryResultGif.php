<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;
use Infureal\Telegram\Enums\ThumbMimeType;

class InlineQueryResultGif extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $gifUrl,
        protected string $thumbUrl,
        protected ?int $gifWidth = null,
        protected ?int $gifHeight = null,
        protected ?int $gifDuration = null,
        protected ?ThumbMimeType $thumbMimeType = null,
        protected ?string $title = null,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::GIF(), $id);
    }

    /**
     * @return string
     */
    public function getGifUrl(): string {
        return $this->gifUrl;
    }

    /**
     * @param string $gifUrl
     * @return InlineQueryResultGif
     */
    public function setGifUrl(string $gifUrl): InlineQueryResultGif {
        $this->gifUrl = $gifUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbUrl(): ?string {
        return $this->thumbUrl;
    }

    /**
     * @param string|null $thumbUrl
     * @return InlineQueryResultGif
     */
    public function setThumbUrl(?string $thumbUrl): InlineQueryResultGif {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGifWidth(): ?int {
        return $this->gifWidth;
    }

    /**
     * @param int|null $gifWidth
     * @return InlineQueryResultGif
     */
    public function setGifWidth(?int $gifWidth): InlineQueryResultGif {
        $this->gifWidth = $gifWidth;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGifHeight(): ?int {
        return $this->gifHeight;
    }

    /**
     * @param int|null $gifHeight
     * @return InlineQueryResultGif
     */
    public function setGifHeight(?int $gifHeight): InlineQueryResultGif {
        $this->gifHeight = $gifHeight;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGifDuration(): ?int {
        return $this->gifDuration;
    }

    /**
     * @param int|null $gifDuration
     * @return InlineQueryResultGif
     */
    public function setGifDuration(?int $gifDuration): InlineQueryResultGif {
        $this->gifDuration = $gifDuration;
        return $this;
    }

    /**
     * @return ThumbMimeType|null
     */
    public function getThumbMimeType(): ?ThumbMimeType {
        return $this->thumbMimeType;
    }

    /**
     * @param ThumbMimeType|null $thumbMimeType
     * @return InlineQueryResultGif
     */
    public function setThumbMimeType(?ThumbMimeType $thumbMimeType): InlineQueryResultGif {
        $this->thumbMimeType = $thumbMimeType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return InlineQueryResultGif
     */
    public function setTitle(?string $title): InlineQueryResultGif {
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
     * @return InlineQueryResultGif
     */
    public function setCaption(?string $caption): InlineQueryResultGif {
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
     * @return InlineQueryResultGif
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultGif {
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
     * @return InlineQueryResultGif
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultGif {
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
     * @return InlineQueryResultGif
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultGif {
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
     * @return InlineQueryResultGif
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultGif {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}