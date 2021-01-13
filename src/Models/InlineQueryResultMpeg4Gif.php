<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;
use Infureal\Telegram\Enums\ThumbMimeType;

class InlineQueryResultMpeg4Gif extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $mpeg4Url,
        protected string $thumbUrl,
        protected ?int $mpeg4Width = null,
        protected ?int $mpeg4Height = null,
        protected ?int $mpeg4Duration = null,
        protected ?ThumbMimeType $thumbMimeType = null,
        protected ?string $title = null,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::MPEG4GIF(), $id);
    }

    /**
     * @return string
     */
    public function getMpeg4Url(): string {
        return $this->mpeg4Url;
    }

    /**
     * @param string $mpeg4Url
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Url(string $mpeg4Url): InlineQueryResultMpeg4Gif {
        $this->mpeg4Url = $mpeg4Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbUrl(): string {
        return $this->thumbUrl;
    }

    /**
     * @param string $thumbUrl
     * @return InlineQueryResultMpeg4Gif
     */
    public function setThumbUrl(string $thumbUrl): InlineQueryResultMpeg4Gif {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMpeg4Width(): ?int {
        return $this->mpeg4Width;
    }

    /**
     * @param int|null $mpeg4Width
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Width(?int $mpeg4Width): InlineQueryResultMpeg4Gif {
        $this->mpeg4Width = $mpeg4Width;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMpeg4Height(): ?int {
        return $this->mpeg4Height;
    }

    /**
     * @param int|null $mpeg4Height
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Height(?int $mpeg4Height): InlineQueryResultMpeg4Gif {
        $this->mpeg4Height = $mpeg4Height;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMpeg4Duration(): ?int {
        return $this->mpeg4Duration;
    }

    /**
     * @param int|null $mpeg4Duration
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Duration(?int $mpeg4Duration): InlineQueryResultMpeg4Gif {
        $this->mpeg4Duration = $mpeg4Duration;
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setThumbMimeType(?ThumbMimeType $thumbMimeType): InlineQueryResultMpeg4Gif {
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setTitle(?string $title): InlineQueryResultMpeg4Gif {
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setCaption(?string $caption): InlineQueryResultMpeg4Gif {
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultMpeg4Gif {
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultMpeg4Gif {
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultMpeg4Gif {
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultMpeg4Gif {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}