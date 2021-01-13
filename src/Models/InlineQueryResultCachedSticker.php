<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\InlineQueryResultType;

class InlineQueryResultCachedSticker extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $stickerFileId,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
    ) {
        parent::__construct(InlineQueryResultType::STICKER(), $id);
    }

    /**
     * @return string
     */
    public function getStickerFileId(): string {
        return $this->stickerFileId;
    }

    /**
     * @param string $stickerFileId
     * @return InlineQueryResultCachedSticker
     */
    public function setStickerFileId(string $stickerFileId): InlineQueryResultCachedSticker {
        $this->stickerFileId = $stickerFileId;
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
     * @return InlineQueryResultCachedSticker
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultCachedSticker {
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
     * @return InlineQueryResultCachedSticker
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultCachedSticker {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

}