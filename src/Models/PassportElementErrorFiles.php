<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorFiles extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected array $fileHashes,
    ) {
        parent::__construct(PassportElementErrorSource::FILES(), $type, $message);
    }

    /**
     * @return array
     */
    public function getFileHashes(): array {
        return $this->fileHashes;
    }

    /**
     * @param array $fileHashes
     * @return PassportElementErrorFiles
     */
    public function setFileHashes(array $fileHashes): PassportElementErrorFiles {
        $this->fileHashes = $fileHashes;
        return $this;
    }

}