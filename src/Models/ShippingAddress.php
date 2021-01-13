<?php


namespace Infureal\Telegram\Models;


class ShippingAddress extends Model {

    public function __construct(
        protected string $countryCode,
        protected string $state,
        protected string $city,
        protected string $streetLine1,
        protected string $streetLine2,
        protected string $postCode,
    ) {}

    /**
     * @return string
     */
    public function getCountryCode(): string {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return ShippingAddress
     */
    public function setCountryCode(string $countryCode): ShippingAddress {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string {
        return $this->state;
    }

    /**
     * @param string $state
     * @return ShippingAddress
     */
    public function setState(string $state): ShippingAddress {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string {
        return $this->city;
    }

    /**
     * @param string $city
     * @return ShippingAddress
     */
    public function setCity(string $city): ShippingAddress {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLine1(): string {
        return $this->streetLine1;
    }

    /**
     * @param string $streetLine1
     * @return ShippingAddress
     */
    public function setStreetLine1(string $streetLine1): ShippingAddress {
        $this->streetLine1 = $streetLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLine2(): string {
        return $this->streetLine2;
    }

    /**
     * @param string $streetLine2
     * @return ShippingAddress
     */
    public function setStreetLine2(string $streetLine2): ShippingAddress {
        $this->streetLine2 = $streetLine2;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode(): string {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return ShippingAddress
     */
    public function setPostCode(string $postCode): ShippingAddress {
        $this->postCode = $postCode;
        return $this;
    }

}