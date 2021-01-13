<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorTranslationFiles extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected array $fileHashes,
    ) {
        parent::__construct(PassportElementErrorSource::TRANSLATION_FILES(), $type, $message);
    }

    /**
     * @return array
     */
    public function getFileHashes(): array {
        return $this->fileHashes;
    }

    /**
     * @param array $fileHashes
     * @return PassportElementErrorTranslationFiles
     */
    public function setFileHashes(array $fileHashes): PassportElementErrorTranslationFiles {
        $this->fileHashes = $fileHashes;
        return $this;
    }

}