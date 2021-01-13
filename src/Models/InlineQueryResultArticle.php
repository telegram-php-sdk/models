<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\InlineQueryResultType;

class InlineQueryResultArticle extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $title,
        protected InputMessageContent $inputMessageContent,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?string $url = null,
        protected ?bool $hideUrl = null,
        protected ?string $description = null,
        protected ?string $thumbUrl = null,
        protected ?string $thumbWidth = null,
        protected ?string $thumbHeight = null,
    ) {
        parent::__construct(InlineQueryResultType::ARTICLE(), $id);
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return InlineQueryResultArticle
     */
    public function setTitle(string $title): InlineQueryResultArticle {
        $this->title = $title;
        return $this;
    }

    /**
     * @return InputMessageContent
     */
    public function getInputMessageContent(): InputMessageContent {
        return $this->inputMessageContent;
    }

    /**
     * @param InputMessageContent $inputMessageContent
     * @return InlineQueryResultArticle
     */
    public function setInputMessageContent(InputMessageContent $inputMessageContent): InlineQueryResultArticle {
        $this->inputMessageContent = $inputMessageContent;
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
     * @return InlineQueryResultArticle
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultArticle {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return InlineQueryResultArticle
     */
    public function setUrl(?string $url): InlineQueryResultArticle {
        $this->url = $url;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHideUrl(): ?bool {
        return $this->hideUrl;
    }

    /**
     * @param bool|null $hideUrl
     * @return InlineQueryResultArticle
     */
    public function setHideUrl(?bool $hideUrl): InlineQueryResultArticle {
        $this->hideUrl = $hideUrl;
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
     * @return InlineQueryResultArticle
     */
    public function setDescription(?string $description): InlineQueryResultArticle {
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
     * @return InlineQueryResultArticle
     */
    public function setThumbUrl(?string $thumbUrl): InlineQueryResultArticle {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbWidth(): ?string {
        return $this->thumbWidth;
    }

    /**
     * @param string|null $thumbWidth
     * @return InlineQueryResultArticle
     */
    public function setThumbWidth(?string $thumbWidth): InlineQueryResultArticle {
        $this->thumbWidth = $thumbWidth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbHeight(): ?string {
        return $this->thumbHeight;
    }

    /**
     * @param string|null $thumbHeight
     * @return InlineQueryResultArticle
     */
    public function setThumbHeight(?string $thumbHeight): InlineQueryResultArticle {
        $this->thumbHeight = $thumbHeight;
        return $this;
    }

}