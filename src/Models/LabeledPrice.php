<?php


namespace Infureal\Telegram\Models;


class LabeledPrice extends Model {

    public function __construct(
        protected string $label,
        protected int $amount,
    ) {}

    /**
     * @return string
     */
    public function getLabel(): string {
        return $this->label;
    }

    /**
     * @param string $label
     * @return LabeledPrice
     */
    public function setLabel(string $label): LabeledPrice {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return LabeledPrice
     */
    public function setAmount(int $amount): LabeledPrice {
        $this->amount = $amount;
        return $this;
    }

}