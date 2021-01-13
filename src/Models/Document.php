<?php


namespace Infureal\Telegram\Models;


class Document extends Model {

    public function __construct(
        protected string $fileId,
        protected string $fileUniqueId,
        protected ?PhotoSize $thumb = null,
        protected ?string $fileName = null,
        protected ?string $mimeType = null,
        protected ?int $fileSize = null,
    ) {}

    /**
     * @return string
     */
    public function getFileId(): string {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     * @return Document
     */
    public function setFileId(string $fileId): Document {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string {
        return $this->fileUniqueId;
    }

    /**
     * @param string $fileUniqueId
     * @return Document
     */
    public function setFileUniqueId(string $fileUniqueId): Document {
        $this->fileUniqueId = $fileUniqueId;
        return $this;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize {
        return $this->thumb;
    }

    /**
     * @param PhotoSize|null $thumb
     * @return Document
     */
    public function setThumb(?PhotoSize $thumb): Document {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * @param string|null $fileName
     * @return Document
     */
    public function setFileName(?string $fileName): Document {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string {
        return $this->mimeType;
    }

    /**
     * @param string|null $mimeType
     * @return Document
     */
    public function setMimeType(?string $mimeType): Document {
        $this->mimeType = $mimeType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int {
        return $this->fileSize;
    }

    /**
     * @param int|null $fileSize
     * @return Document
     */
    public function setFileSize(?int $fileSize): Document {
        $this->fileSize = $fileSize;
        return $this;
    }

}