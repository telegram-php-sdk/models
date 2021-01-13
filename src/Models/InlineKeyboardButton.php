<?php


namespace Infureal\Telegram\Models;


class InlineKeyboardButton extends Model {

    public function __construct(
        protected string $text,
        protected ?string $url = null,
        protected ?LoginUrl $loginUrl = null,
        protected ?string $callbackData = null,
        protected ?string $switchInlineQuery = null,
        protected ?string $switchInlineQueryCurrentChat = null,
        protected ?CallbackGame $callbackGame = null,
        protected ?bool $pay = null,
    ) {}

    /**
     * @return string
     */
    public function getText(): string {
        return $this->text;
    }

    /**
     * @param string $text
     * @return InlineKeyboardButton
     */
    public function setText(string $text): InlineKeyboardButton {
        $this->text = $text;
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
     * @return InlineKeyboardButton
     */
    public function setUrl(?string $url): InlineKeyboardButton {
        $this->url = $url;
        return $this;
    }

    /**
     * @return LoginUrl|null
     */
    public function getLoginUrl(): ?LoginUrl {
        return $this->loginUrl;
    }

    /**
     * @param LoginUrl|null $loginUrl
     * @return InlineKeyboardButton
     */
    public function setLoginUrl(?LoginUrl $loginUrl): InlineKeyboardButton {
        $this->loginUrl = $loginUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCallbackData(): ?string {
        return $this->callbackData;
    }

    /**
     * @param string|null $callbackData
     * @return InlineKeyboardButton
     */
    public function setCallbackData(?string $callbackData): InlineKeyboardButton {
        $this->callbackData = $callbackData;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQuery(): ?string {
        return $this->switchInlineQuery;
    }

    /**
     * @param string|null $switchInlineQuery
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQuery(?string $switchInlineQuery): InlineKeyboardButton {
        $this->switchInlineQuery = $switchInlineQuery;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQueryCurrentChat(): ?string {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * @param string|null $switchInlineQueryCurrentChat
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQueryCurrentChat(?string $switchInlineQueryCurrentChat): InlineKeyboardButton {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
        return $this;
    }

    /**
     * @return CallbackGame|null
     */
    public function getCallbackGame(): ?CallbackGame {
        return $this->callbackGame;
    }

    /**
     * @param CallbackGame|null $callbackGame
     * @return InlineKeyboardButton
     */
    public function setCallbackGame(?CallbackGame $callbackGame): InlineKeyboardButton {
        $this->callbackGame = $callbackGame;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPay(): ?bool {
        return $this->pay;
    }

    /**
     * @param bool|null $pay
     * @return InlineKeyboardButton
     */
    public function setPay(?bool $pay): InlineKeyboardButton {
        $this->pay = $pay;
        return $this;
    }

}