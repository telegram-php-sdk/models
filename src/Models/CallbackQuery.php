<?php


namespace Infureal\Telegram\Models;


class CallbackQuery extends Model {

    public function __construct(
        protected string $id,
        protected User $from,
        protected ?Message $message = null,
        protected ?string $inlineMessageId = null,
        protected ?string $chatInstance = null,
        protected ?string $data = null,
        protected ?string $gameShortName = null,
    ) {}

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     * @return CallbackQuery
     */
    public function setId(string $id): CallbackQuery {
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
     * @return CallbackQuery
     */
    public function setFrom(User $from): CallbackQuery {
        $this->from = $from;
        return $this;
    }

    /**
     * @return Message|null
     */
    public function getMessage(): ?Message {
        return $this->message;
    }

    /**
     * @param Message|null $message
     * @return CallbackQuery
     */
    public function setMessage(?Message $message): CallbackQuery {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string {
        return $this->inlineMessageId;
    }

    /**
     * @param string|null $inlineMessageId
     * @return CallbackQuery
     */
    public function setInlineMessageId(?string $inlineMessageId): CallbackQuery {
        $this->inlineMessageId = $inlineMessageId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getChatInstance(): ?string {
        return $this->chatInstance;
    }

    /**
     * @param string|null $chatInstance
     * @return CallbackQuery
     */
    public function setChatInstance(?string $chatInstance): CallbackQuery {
        $this->chatInstance = $chatInstance;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string {
        return $this->data;
    }

    /**
     * @param string|null $data
     * @return CallbackQuery
     */
    public function setData(?string $data): CallbackQuery {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGameShortName(): ?string {
        return $this->gameShortName;
    }

    /**
     * @param string|null $gameShortName
     * @return CallbackQuery
     */
    public function setGameShortName(?string $gameShortName): CallbackQuery {
        $this->gameShortName = $gameShortName;
        return $this;
    }

}