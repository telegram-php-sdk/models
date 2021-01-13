<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\InlineQueryResultType;

class InlineQueryResultGame extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $gameShortName,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
    ) {
        parent::__construct(InlineQueryResultType::GAME(), $id);
    }

    /**
     * @return string
     */
    public function getGameShortName(): string {
        return $this->gameShortName;
    }

    /**
     * @param string $gameShortName
     * @return InlineQueryResultGame
     */
    public function setGameShortName(string $gameShortName): InlineQueryResultGame {
        $this->gameShortName = $gameShortName;
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
     * @return InlineQueryResultGame
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultGame {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }

}