<?php


namespace Infureal\Telegram\Models;


class InlineQuery extends Model {

    public function __construct(
        protected string $id,
        protected User $from,
        protected string $query,
        protected string $offset,
        protected ?Location $location = null,
    ) {}

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     * @return InlineQuery
     */
    public function setId(string $id): InlineQuery {
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
     * @return InlineQuery
     */
    public function setFrom(User $from): InlineQuery {
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
     * @return InlineQuery
     */
    public function setQuery(string $query): InlineQuery {
        $this->query = $query;
        return $this;
    }

    /**
     * @return string
     */
    public function getOffset(): string {
        return $this->offset;
    }

    /**
     * @param string $offset
     * @return InlineQuery
     */
    public function setOffset(string $offset): InlineQuery {
        $this->offset = $offset;
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
     * @return InlineQuery
     */
    public function setLocation(?Location $location): InlineQuery {
        $this->location = $location;
        return $this;
    }

}