<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\MessageEntityType;

class MessageEntity extends Model {

    public function __construct(
        protected MessageEntityType $type,
        protected int $offset,
        protected int $length,
        protected ?string $url = null,
        protected ?User $user = null,
        protected ?string $language = null,
    ) {}

    /**
     * @return MessageEntityType
     */
    public function getType(): MessageEntityType {
        return $this->type;
    }

    /**
     * @param MessageEntityType $type
     * @return MessageEntity
     */
    public function setType(MessageEntityType $type): MessageEntity {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset(): int {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return MessageEntity
     */
    public function setOffset(int $offset): MessageEntity {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int {
        return $this->length;
    }

    /**
     * @param int $length
     * @return MessageEntity
     */
    public function setLength(int $length): MessageEntity {
        $this->length = $length;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return MessageEntity
     */
    public function setUrl(?string $url): MessageEntity {
        $this->url = $url;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User {
        return $this->user;
    }

    /**
     * @param User|null $user
     * @return MessageEntity
     */
    public function setUser(?User $user): MessageEntity {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return MessageEntity
     */
    public function setLanguage(?string $language): MessageEntity {
        $this->language = $language;
        return $this;
    }



}