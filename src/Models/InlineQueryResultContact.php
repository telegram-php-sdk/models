<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\InlineQueryResultType;

class InlineQueryResultContact extends InlineQueryResult {

    public function __construct(
        string $id,
        protected string $phoneNumber,
        protected string $firstName,
        protected ?string $lastName = null,
        protected ?string $vCard = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
        protected ?string $thumbUrl = null,
        protected ?int $thumbWidth = null,
        protected ?int $thumbHeight = null,
    ) {
        parent::__construct(InlineQueryResultType::CONTACT(), $id);
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return InlineQueryResultContact
     */
    public function setPhoneNumber(string $phoneNumber): InlineQueryResultContact {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return InlineQueryResultContact
     */
    public function setFirstName(string $firstName): InlineQueryResultContact {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return InlineQueryResultContact
     */
    public function setLastName(?string $lastName): InlineQueryResultContact {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVCard(): ?string {
        return $this->vCard;
    }

    /**
     * @param string|null $vCard
     * @return InlineQueryResultContact
     */
    public function setVCard(?string $vCard): InlineQueryResultContact {
        $this->vCard = $vCard;
        return $this;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup {
        return $this->replyMarkup;
    }

    /**
     * @param InlineKeyboardMarkup|null $replyMarkup
     * @return InlineQueryResultContact
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultContact {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }

    /**
     * @return InputMessageContent|null
     */
    public function getInputMessageContent(): ?InputMessageContent {
        return $this->inputMessageContent;
    }

    /**
     * @param InputMessageContent|null $inputMessageContent
     * @return InlineQueryResultContact
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultContact {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbUrl(): ?string {
        return $this->thumbUrl;
    }

    /**
     * @param string|null $thumbUrl
     * @return InlineQueryResultContact
     */
    public function setThumbUrl(?string $thumbUrl): InlineQueryResultContact {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbWidth(): ?int {
        return $this->thumbWidth;
    }

    /**
     * @param int|null $thumbWidth
     * @return InlineQueryResultContact
     */
    public function setThumbWidth(?int $thumbWidth): InlineQueryResultContact {
        $this->thumbWidth = $thumbWidth;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbHeight(): ?int {
        return $this->thumbHeight;
    }

    /**
     * @param int|null $thumbHeight
     * @return InlineQueryResultContact
     */
    public function setThumbHeight(?int $thumbHeight): InlineQueryResultContact {
        $this->thumbHeight = $thumbHeight;
        return $this;
    }

}