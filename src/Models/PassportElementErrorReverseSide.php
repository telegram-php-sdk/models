<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorReverseSide extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected string $fileHash,
    ) {
        parent::__construct(PassportElementErrorSource::REVERSE_SIDE(), $type, $message);
    }

    /**
     * @return string
     */
    public function getFileHash(): string {
        return $this->fileHash;
    }

    /**
     * @param string $fileHash
     * @return PassportElementErrorReverseSide
     */
    public function setFileHash(string $fileHash): PassportElementErrorReverseSide {
        $this->fileHash = $fileHash;
        return $this;
    }

}