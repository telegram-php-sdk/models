<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;
use Infureal\Telegram\Enums\VideoMimeType;

class InlineQueryResultVideo extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $videoUrl,
        protected VideoMimeType $mimeType,
        protected string $thumbUrl,
        protected string $title,
        protected ?string $description = null,
        protected ?int $videoWidth = null,
        protected ?int $videoHeight = null,
        protected ?int $videoDuration = null,
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
    public function getVideoUrl(): string {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     * @return InlineQueryResultVideo
     */
    public function setVideoUrl(string $videoUrl): InlineQueryResultVideo {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return VideoMimeType
     */
    public function getMimeType(): VideoMimeType {
        return $this->mimeType;
    }

    /**
     * @param VideoMimeType $mimeType
     * @return InlineQueryResultVideo
     */
    public function setMimeType(VideoMimeType $mimeType): InlineQueryResultVideo {
        $this->mimeType = $mimeType;
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
     * @return InlineQueryResultVideo
     */
    public function setThumbUrl(string $thumbUrl): InlineQueryResultVideo {
        $this->thumbUrl = $thumbUrl;
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
     * @return InlineQueryResultVideo
     */
    public function setTitle(string $title): InlineQueryResultVideo {
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
     * @return InlineQueryResultVideo
     */
    public function setDescription(?string $description): InlineQueryResultVideo {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVideoWidth(): ?int {
        return $this->videoWidth;
    }

    /**
     * @param int|null $videoWidth
     * @return InlineQueryResultVideo
     */
    public function setVideoWidth(?int $videoWidth): InlineQueryResultVideo {
        $this->videoWidth = $videoWidth;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVideoHeight(): ?int {
        return $this->videoHeight;
    }

    /**
     * @param int|null $videoHeight
     * @return InlineQueryResultVideo
     */
    public function setVideoHeight(?int $videoHeight): InlineQueryResultVideo {
        $this->videoHeight = $videoHeight;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVideoDuration(): ?int {
        return $this->videoDuration;
    }

    /**
     * @param int|null $videoDuration
     * @return InlineQueryResultVideo
     */
    public function setVideoDuration(?int $videoDuration): InlineQueryResultVideo {
        $this->videoDuration = $videoDuration;
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
     * @return InlineQueryResultVideo
     */
    public function setCaption(?string $caption): InlineQueryResultVideo {
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
     * @return InlineQueryResultVideo
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultVideo {
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
     * @return InlineQueryResultVideo
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultVideo {
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
     * @return InlineQueryResultVideo
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultVideo {
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
     * @return InlineQueryResultVideo
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultVideo {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}