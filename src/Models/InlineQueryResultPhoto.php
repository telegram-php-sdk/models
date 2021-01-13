<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;

class InlineQueryResultPhoto extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $photoUrl,
        protected string $thumbUrl,
        protected ?int $photoWidth = null,
        protected ?int $photoHeight = null,
        protected ?string $title = null,
        protected ?string $description = null,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::PHOTO(), $id);
    }

    /**
     * @return string
     */
    public function getPhotoUrl(): string {
        return $this->photoUrl;
    }

    /**
     * @param string $photoUrl
     * @return InlineQueryResultPhoto
     */
    public function setPhotoUrl(string $photoUrl): InlineQueryResultPhoto {
        $this->photoUrl = $photoUrl;
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
     * @return InlineQueryResultPhoto
     */
    public function setThumbUrl(string $thumbUrl): InlineQueryResultPhoto {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPhotoWidth(): ?int {
        return $this->photoWidth;
    }

    /**
     * @param int|null $photoWidth
     * @return InlineQueryResultPhoto
     */
    public function setPhotoWidth(?int $photoWidth): InlineQueryResultPhoto {
        $this->photoWidth = $photoWidth;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPhotoHeight(): ?int {
        return $this->photoHeight;
    }

    /**
     * @param int|null $photoHeight
     * @return InlineQueryResultPhoto
     */
    public function setPhotoHeight(?int $photoHeight): InlineQueryResultPhoto {
        $this->photoHeight = $photoHeight;
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
     * @return InlineQueryResultPhoto
     */
    public function setTitle(?string $title): InlineQueryResultPhoto {
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
     * @return InlineQueryResultPhoto
     */
    public function setDescription(?string $description): InlineQueryResultPhoto {
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
     * @return InlineQueryResultPhoto
     */
    public function setCaption(?string $caption): InlineQueryResultPhoto {
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
     * @return InlineQueryResultPhoto
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultPhoto {
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
     * @return InlineQueryResultPhoto
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultPhoto {
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
     * @return InlineQueryResultPhoto
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultPhoto {
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
     * @return InlineQueryResultPhoto
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultPhoto {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}