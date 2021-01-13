<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\InlineKeyboardRows;

class InlineKeyboardMarkup extends Model {

    public function __construct(
        protected InlineKeyboardRows $inlineKeyboard,
    ) {}

    /**
     * @return InlineKeyboardRows
     */
    public function getInlineKeyboard(): InlineKeyboardRows {
        return $this->inlineKeyboard;
    }

    /**
     * @param InlineKeyboardRows $inlineKeyboard
     * @return InlineKeyboardMarkup
     */
    public function setInlineKeyboard(InlineKeyboardRows $inlineKeyboard): InlineKeyboardMarkup {
        $this->inlineKeyboard = $inlineKeyboard;
        return $this;
    }

}