<?php


namespace Infureal\Telegram\Models;


class InputContactMessageContent extends InputMessageContent {

    public function __construct(
        protected string $phoneNumber,
        protected string $firstName,
        protected ?string $lastName = null,
        protected ?string $vCard = null,
    ) {}

    /**
     * @return string
     */
    public function getPhoneNumber(): string {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return InputContactMessageContent
     */
    public function setPhoneNumber(string $phoneNumber): InputContactMessageContent {
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
     * @return InputContactMessageContent
     */
    public function setFirstName(string $firstName): InputContactMessageContent {
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
     * @return InputContactMessageContent
     */
    public function setLastName(?string $lastName): InputContactMessageContent {
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
     * @return InputContactMessageContent
     */
    public function setVCard(?string $vCard): InputContactMessageContent {
        $this->vCard = $vCard;
        return $this;
    }

}