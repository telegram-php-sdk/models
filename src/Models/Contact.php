<?php


namespace Infureal\Telegram\Models;


class Contact extends Model {

    public function __construct(
        protected string $phoneNumber,
        protected string $firstName,
        protected ?string $lastName = null,
        protected ?int $userId = null,
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
     * @return Contact
     */
    public function setPhoneNumber(string $phoneNumber): Contact {
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
     * @return Contact
     */
    public function setFirstName(string $firstName): Contact {
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
     * @return Contact
     */
    public function setLastName(?string $lastName): Contact {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     * @return Contact
     */
    public function setUserId(?int $userId): Contact {
        $this->userId = $userId;
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
     * @return Contact
     */
    public function setVCard(?string $vCard): Contact {
        $this->vCard = $vCard;
        return $this;
    }

}