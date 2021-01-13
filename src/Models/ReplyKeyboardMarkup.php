<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\InlineKeyboardRows;

class ReplyKeyboardMarkup extends Model {

    public function __construct(
        protected InlineKeyboardRows $keyboard,
        protected ?bool $resizeKeyboard = null,
        protected ?bool $oneTimeKeyboard = null,
        protected ?bool $selective = null,
    ) {}

    /**
     * @return InlineKeyboardRows
     */
    public function getKeyboard(): InlineKeyboardRows {
        return $this->keyboard;
    }

    /**
     * @param InlineKeyboardRows $keyboard
     * @return ReplyKeyboardMarkup
     */
    public function setKeyboard(InlineKeyboardRows $keyboard): ReplyKeyboardMarkup {
        $this->keyboard = $keyboard;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getResizeKeyboard(): ?bool {
        return $this->resizeKeyboard;
    }

    /**
     * @param bool|null $resizeKeyboard
     * @return ReplyKeyboardMarkup
     */
    public function setResizeKeyboard(?bool $resizeKeyboard): ReplyKeyboardMarkup {
        $this->resizeKeyboard = $resizeKeyboard;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOneTimeKeyboard(): ?bool {
        return $this->oneTimeKeyboard;
    }

    /**
     * @param bool|null $oneTimeKeyboard
     * @return ReplyKeyboardMarkup
     */
    public function setOneTimeKeyboard(?bool $oneTimeKeyboard): ReplyKeyboardMarkup {
        $this->oneTimeKeyboard = $oneTimeKeyboard;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSelective(): ?bool {
        return $this->selective;
    }

    /**
     * @param bool|null $selective
     * @return ReplyKeyboardMarkup
     */
    public function setSelective(?bool $selective): ReplyKeyboardMarkup {
        $this->selective = $selective;
        return $this;
    }

}