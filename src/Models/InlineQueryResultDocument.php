<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\DocumentMimeType;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;

class InlineQueryResultDocument extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $documentUrl,
        protected DocumentMimeType $mimeType,
        protected string $title,
        protected ?string $description = null,
        protected ?string $thumbUrl = null,
        protected ?int $thumbWidth = null,
        protected ?int $thumbHeight = null,
        protected ?string $caption = null,
        protected ?ParseMode $parseMode = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::DOCUMENT(), $id);
    }

    /**
     * @return string
     */
    public function getDocumentUrl(): string {
        return $this->documentUrl;
    }

    /**
     * @param string $documentUrl
     * @return InlineQueryResultDocument
     */
    public function setDocumentUrl(string $documentUrl): InlineQueryResultDocument {
        $this->documentUrl = $documentUrl;
        return $this;
    }

    /**
     * @return DocumentMimeType
     */
    public function getMimeType(): DocumentMimeType {
        return $this->mimeType;
    }

    /**
     * @param DocumentMimeType $mimeType
     * @return InlineQueryResultDocument
     */
    public function setMimeType(DocumentMimeType $mimeType): InlineQueryResultDocument {
        $this->mimeType = $mimeType;
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
     * @return InlineQueryResultDocument
     */
    public function setTitle(string $title): InlineQueryResultDocument {
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
     * @return InlineQueryResultDocument
     */
    public function setDescription(?string $description): InlineQueryResultDocument {
        $this->description = $description;
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
     * @return InlineQueryResultDocument
     */
    public function setThumbUrl(?string $thumbUrl): InlineQueryResultDocument {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbWidth(): ?int {
        return $this->thumbWidth;
    }

    /**
     * @param int|null $thumbWidth
     * @return InlineQueryResultDocument
     */
    public function setThumbWidth(?int $thumbWidth): InlineQueryResultDocument {
        $this->thumbWidth = $thumbWidth;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbHeight(): ?int {
        return $this->thumbHeight;
    }

    /**
     * @param int|null $thumbHeight
     * @return InlineQueryResultDocument
     */
    public function setThumbHeight(?int $thumbHeight): InlineQueryResultDocument {
        $this->thumbHeight = $thumbHeight;
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
     * @return InlineQueryResultDocument
     */
    public function setCaption(?string $caption): InlineQueryResultDocument {
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
     * @return InlineQueryResultDocument
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultDocument {
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
     * @return InlineQueryResultDocument
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultDocument {
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
     * @return InlineQueryResultDocument
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultDocument {
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
     * @return InlineQueryResultDocument
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultDocument {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}