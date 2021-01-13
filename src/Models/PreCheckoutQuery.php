<?php


namespace Infureal\Telegram\Models;


class PreCheckoutQuery extends Model {

    public function __construct(
        protected string $id,
        protected User $from,
        protected string $currency,
        protected int $totalAmount,
        protected string $invoicePayload,
        protected ?string $shippingOptionId,
        protected ?OrderInfo $orderInfo = null,
    ) {}

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     * @return PreCheckoutQuery
     */
    public function setId(string $id): PreCheckoutQuery {
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
     * @return PreCheckoutQuery
     */
    public function setFrom(User $from): PreCheckoutQuery {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return PreCheckoutQuery
     */
    public function setCurrency(string $currency): PreCheckoutQuery {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     * @return PreCheckoutQuery
     */
    public function setTotalAmount(int $totalAmount): PreCheckoutQuery {
        $this->totalAmount = $totalAmount;
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
     * @return PreCheckoutQuery
     */
    public function setInvoicePayload(string $invoicePayload): PreCheckoutQuery {
        $this->invoicePayload = $invoicePayload;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShippingOptionId(): ?string {
        return $this->shippingOptionId;
    }

    /**
     * @param string|null $shippingOptionId
     * @return PreCheckoutQuery
     */
    public function setShippingOptionId(?string $shippingOptionId): PreCheckoutQuery {
        $this->shippingOptionId = $shippingOptionId;
        return $this;
    }

    /**
     * @return OrderInfo|null
     */
    public function getOrderInfo(): ?OrderInfo {
        return $this->orderInfo;
    }

    /**
     * @param OrderInfo|null $orderInfo
     * @return PreCheckoutQuery
     */
    public function setOrderInfo(?OrderInfo $orderInfo): PreCheckoutQuery {
        $this->orderInfo = $orderInfo;
        return $this;
    }

}