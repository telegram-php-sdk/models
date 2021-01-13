<?php


namespace Infureal\Telegram\Models;


class ChosenInlineResult {

    public function __construct(
        protected string $resultId,
        protected User $from,
        protected string $query,
        protected ?Location $location = null,
        protected ?string $inlineMessageId = null,
    ) {}

    /**
     * @return string
     */
    public function getResultId(): string {
        return $this->resultId;
    }

    /**
     * @param string $resultId
     * @return ChosenInlineResult
     */
    public function setResultId(string $resultId): ChosenInlineResult {
        $this->resultId = $resultId;
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
     * @return ChosenInlineResult
     */
    public function setFrom(User $from): ChosenInlineResult {
        $this->from = $from;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery(): string {
        return $this->query;
    }

    /**
     * @param string $query
     * @return ChosenInlineResult
     */
    public function setQuery(string $query): ChosenInlineResult {
        $this->query = $query;
        return $this;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * @param Location|null $location
     * @return ChosenInlineResult
     */
    public function setLocation(?Location $location): ChosenInlineResult {
        $this->location = $location;
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
     * @return ChosenInlineResult
     */
    public function setInlineMessageId(?string $inlineMessageId): ChosenInlineResult {
        $this->inlineMessageId = $inlineMessageId;
        return $this;
    }

}