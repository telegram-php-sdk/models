<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorFrontSide extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected string $fileHash,
    ) {
        parent::__construct(PassportElementErrorSource::FRONT_SIDE(), $type, $message);
    }

    /**
     * @return string
     */
    public function getFileHash(): string {
        return $this->fileHash;
    }

    /**
     * @param string $fileHash
     * @return PassportElementErrorFrontSide
     */
    public function setFileHash(string $fileHash): PassportElementErrorFrontSide {
        $this->fileHash = $fileHash;
        return $this;
    }

}