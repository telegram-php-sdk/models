<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorSelfie extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected string $fileHash,
    ) {
        parent::__construct(PassportElementErrorSource::SELFIE(), $type, $message);
    }

    /**
     * @return string
     */
    public function getFileHash(): string {
        return $this->fileHash;
    }

    /**
     * @param string $fileHash
     * @return PassportElementErrorSelfie
     */
    public function setFileHash(string $fileHash): PassportElementErrorSelfie {
        $this->fileHash = $fileHash;
        return $this;
    }

}