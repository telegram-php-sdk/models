<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorFile extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected string $fileHash,
    ) {
        parent::__construct(PassportElementErrorSource::FILE(), $type, $message);
    }

    /**
     * @return string
     */
    public function getFileHash(): string {
        return $this->fileHash;
    }

    /**
     * @param string $fileHash
     * @return PassportElementErrorFiles
     */
    public function setFileHash(string $fileHash): PassportElementErrorFiles {
        $this->fileHash = $fileHash;
        return $this;
    }

}