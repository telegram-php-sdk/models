<?php


namespace Infureal\Telegram\Models;


class ForceReply extends Model {

    public function __construct(
        protected bool $forceReply = true,
        protected ?bool $selective = null,
    ) {}

    /**
     * @return bool
     */
    public function isForceReply(): bool {
        return $this->forceReply;
    }

    /**
     * @param bool $forceReply
     * @return ForceReply
     */
    public function setForceReply(bool $forceReply): ForceReply {
        $this->forceReply = $forceReply;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSelective(): ?bool {
        return $this->selective;
    }

    /**
     * @param bool|null $selective
     * @return ForceReply
     */
    public function setSelective(?bool $selective): ForceReply {
        $this->selective = $selective;
        return $this;
    }

}