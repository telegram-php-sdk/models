<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

class PassportElementErrorDataField extends PassportElementError {

    public function __construct(
        string $type,
        string $message,
        protected string $fieldName,
        protected array $dataHash,
    ) {
        parent::__construct(PassportElementErrorSource::DATA(), $type, $message);
    }

    /**
     * @return string
     */
    public function getFieldName(): string {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return PassportElementErrorDataField
     */
    public function setFieldName(string $fieldName): PassportElementErrorDataField {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * @return array
     */
    public function getFileHashes(): array {
        return $this->fileHashes;
    }

    /**
     * @param array $fileHashes
     * @return PassportElementErrorDataField
     */
    public function setFileHashes(array $fileHashes): PassportElementErrorDataField {
        $this->fileHashes = $fileHashes;
        return $this;
    }

}