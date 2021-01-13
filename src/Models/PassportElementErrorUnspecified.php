<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorUnspecified extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected string $elementHash,
    ) {
        parent::__construct(PassportElementErrorSource::UNSPECIFIED(), $type, $message);
    }

    /**
     * @return string
     */
    public function getElementHash(): string {
        return $this->elementHash;
    }

    /**
     * @param string $elementHash
     * @return PassportElementErrorUnspecified
     */
    public function setElementHash(string $elementHash): PassportElementErrorUnspecified {
        $this->elementHash = $elementHash;
        return $this;
    }

}