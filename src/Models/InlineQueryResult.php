<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\InlineQueryResultType;

abstract class InlineQueryResult extends Model {

    public function __construct(
        protected InlineQueryResultType $type,
        protected string $id,
    ) {}

    /**
     * @return InlineQueryResultType
     */
    public function getType(): InlineQueryResultType {
        return $this->type;
    }

    /**
     * @param InlineQueryResultType $type
     * @return InlineQueryResult
     */
    public function setType(InlineQueryResultType $type): InlineQueryResult {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     * @return InlineQueryResult
     */
    public function setId(string $id): InlineQueryResult {
        $this->id = $id;
        return $this;
    }

}