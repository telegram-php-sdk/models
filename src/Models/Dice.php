<?php


namespace Infureal\Telegram\Models;


class Dice extends Model {

    public function __construct(
        protected string $emoji,
        protected int $value,
    ) {}

    /**
     * @return string
     */
    public function getEmoji(): string {
        return $this->emoji;
    }

    /**
     * @param string $emoji
     * @return Dice
     */
    public function setEmoji(string $emoji): Dice {
        $this->emoji = $emoji;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int {
        return $this->value;
    }

    /**
     * @param int $value
     * @return Dice
     */
    public function setValue(int $value): Dice {
        $this->value = $value;
        return $this;
    }

}