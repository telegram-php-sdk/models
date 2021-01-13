<?php


namespace Infureal\Telegram\Models;


class ReplyKeyboardRemove extends Model {

    public function __construct(
        protected bool $removeKeyboard,
        protected ?bool $selective = null,
    ) {}

    /**
     * @return bool
     */
    public function isRemoveKeyboard(): bool {
        return $this->removeKeyboard;
    }

    /**
     * @param bool $removeKeyboard
     * @return ReplyKeyboardRemove
     */
    public function setRemoveKeyboard(bool $removeKeyboard): ReplyKeyboardRemove {
        $this->removeKeyboard = $removeKeyboard;
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
     * @return ReplyKeyboardRemove
     */
    public function setSelective(?bool $selective): ReplyKeyboardRemove {
        $this->selective = $selective;
        return $this;
    }

}