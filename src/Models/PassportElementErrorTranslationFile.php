<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorTranslationFile extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected string $fileHash,
    ) {
        parent::__construct(PassportElementErrorSource::TRANSLATION_FILE(), $type, $message);
    }

    /**
     * @return string
     */
    public function getFileHash(): string {
        return $this->fileHash;
    }

    /**
     * @param string $fileHash
     * @return PassportElementErrorTranslationFile
     */
    public function setFileHash(string $fileHash): PassportElementErrorTranslationFile {
        $this->fileHash = $fileHash;
        return $this;
    }

}