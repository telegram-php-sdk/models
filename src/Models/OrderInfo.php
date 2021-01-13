<?php


namespace Infureal\Telegram\Models;


class OrderInfo extends Model {

    public function __construct(
        protected ?string $name = null,
        protected ?string $phoneNumber = null,
        protected ?string $email = null,
        protected ?ShippingAddress $shippingAddress = null,
    ) {}

    /**
     * @return string|null
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return OrderInfo
     */
    public function setName(?string $name): OrderInfo {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     * @return OrderInfo
     */
    public function setPhoneNumber(?string $phoneNumber): OrderInfo {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return OrderInfo
     */
    public function setEmail(?string $email): OrderInfo {
        $this->email = $email;
        return $this;
    }

    /**
     * @return ShippingAddress|null
     */
    public function getShippingAddress(): ?ShippingAddress {
        return $this->shippingAddress;
    }

    /**
     * @param ShippingAddress|null $shippingAddress
     * @return OrderInfo
     */
    public function setShippingAddress(?ShippingAddress $shippingAddress): OrderInfo {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

}