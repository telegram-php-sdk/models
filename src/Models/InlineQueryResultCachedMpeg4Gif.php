<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InlineQueryResultType;
use Infureal\Telegram\Enums\ParseMode;
use Infureal\Telegram\Enums\ThumbMimeType;

class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $mpeg4FileId,
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
    public function getMpeg4FileId(): string {
        return $this->mpeg4FileId;
    }

    /**
     * @param string $mpeg4FileId
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setMpeg4FileId(string $mpeg4FileId): InlineQueryResultCachedMpeg4Gif {
        $this->mpeg4FileId = $mpeg4FileId;
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
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setTitle(?string $title): InlineQueryResultCachedMpeg4Gif {
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
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setCaption(?string $caption): InlineQueryResultCachedMpeg4Gif {
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
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setParseMode(?ParseMode $parseMode): InlineQueryResultCachedMpeg4Gif {
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
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InlineQueryResultCachedMpeg4Gif {
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
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultCachedMpeg4Gif {
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
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultCachedMpeg4Gif {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}