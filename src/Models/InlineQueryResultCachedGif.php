<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;

class InlineQueryResultCachedGif extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $gifFileId,
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
    public function getGifFileId(): string {
        return $this->gifFileId;
    }

    /**
     * @param string $gifFileId
     * @return InlineQueryResultCachedGif
     */
    public function setGifFileId(string $gifFileId): InlineQueryResultCachedGif {
        $this->gifFileId = $gifFileId;
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
     * @return InlineQueryResultCachedGif
     */
    public function setTitle(?string $title): InlineQueryResultCachedGif {
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
     * @return InlineQueryResultCachedGif
     */
    public function setCaption(?string $caption): InlineQueryResultCachedGif {
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
     * @return InlineQueryResultCachedGif
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultCachedGif {
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
     * @return InlineQueryResultCachedGif
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultCachedGif {
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
     * @return InlineQueryResultCachedGif
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultCachedGif {
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
     * @return InlineQueryResultCachedGif
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultCachedGif {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}