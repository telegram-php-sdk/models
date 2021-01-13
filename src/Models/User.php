<?php


namespace Infureal\Telegram\Models;


class User extends Model {

    public function __construct(
        protected int $id,
        protected bool $isBot,
        protected string $firstName,
        protected ?string $lastName = null,
        protected ?string $username = null,
        protected ?string $languageCode = null,
        protected ?bool $canJoinGroups = null,
        protected ?bool $canReadAllGroupMessages = null,
        protected ?bool $supportsInlineQueries = null,
    ) {}

    /**
     * @return bool|null
     */
    public function getCanJoinGroups(): ?bool {
        return $this->canJoinGroups;
    }

    /**
     * @param bool|null $canJoinGroups
     * @return User
     */
    public function setCanJoinGroups(?bool $canJoinGroups): User {
        $this->canJoinGroups = $canJoinGroups;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanReadAllGroupMessages(): ?bool {
        return $this->canReadAllGroupMessages;
    }

    /**
     * @param bool|null $canReadAllGroupMessages
     * @return User
     */
    public function setCanReadAllGroupMessages(?bool $canReadAllGroupMessages): User {
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;
        return $this;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): User {
        $this->id = $id;
        return $this;
    }

    public function isBot(): bool {
        return $this->isBot;
    }

    public function setIsBot(bool $isBot): User {
        $this->isBot = $isBot;
        return $this;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): User {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setLastName(string $lastName): User {
        $this->lastName = $lastName;
        return $this;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): User {
        $this->username = $username;
        return $this;
    }

    public function getLanguageCode(): string {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): User {
        $this->languageCode = $languageCode;
        return $this;
    }


}