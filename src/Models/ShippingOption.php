<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\LabeledPriceCollection;

class ShippingOption extends Model {

    public function __construct(
        protected string $id,
        protected string $title,
        protected LabeledPriceCollection $prices,
    ) {}

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ShippingOption
     */
    public function setId(string $id): ShippingOption {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ShippingOption
     */
    public function setTitle(string $title): ShippingOption {
        $this->title = $title;
        return $this;
    }

    /**
     * @return LabeledPriceCollection
     */
    public function getPrices(): LabeledPriceCollection {
        return $this->prices;
    }

    /**
     * @param LabeledPriceCollection $prices
     * @return ShippingOption
     */
    public function setPrices(LabeledPriceCollection $prices): ShippingOption {
        $this->prices = $prices;
        return $this;
    }

}