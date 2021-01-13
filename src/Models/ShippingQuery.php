<?php


namespace Infureal\Telegram\Models;


class ShippingQuery extends Model {

    public function __construct(
        protected string $id,
        protected User $from,
        protected string $invoicePayload,
        protected ShippingAddress $shippingAddress,
    ) {}

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ShippingQuery
     */
    public function setId(string $id): ShippingQuery {
        $this->id = $id;
        return $this;
    }

    /**
     * @return User
     */
    public function getFrom(): User {
        return $this->from;
    }

    /**
     * @param User $from
     * @return ShippingQuery
     */
    public function setFrom(User $from): ShippingQuery {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicePayload(): string {
        return $this->invoicePayload;
    }

    /**
     * @param string $invoicePayload
     * @return ShippingQuery
     */
    public function setInvoicePayload(string $invoicePayload): ShippingQuery {
        $this->invoicePayload = $invoicePayload;
        return $this;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress(): ShippingAddress {
        return $this->shippingAddress;
    }

    /**
     * @param ShippingAddress $shippingAddress
     * @return ShippingQuery
     */
    public function setShippingAddress(ShippingAddress $shippingAddress): ShippingQuery {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

}