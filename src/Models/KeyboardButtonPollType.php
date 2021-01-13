<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PollType;

class KeyboardButtonPollType {

    public function __construct(
        protected ?PollType $type = null,
    ) {}

    /**
     * @return PollType|null
     */
    public function getType(): ?PollType {
        return $this->type;
    }

    /**
     * @param PollType|null $type
     * @return KeyboardButtonPollType
     */
    public function setType(?PollType $type): KeyboardButtonPollType {
        $this->type = $type;
        return $this;
    }

}