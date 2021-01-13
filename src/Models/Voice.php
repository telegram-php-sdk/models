<?php


namespace Infureal\Telegram\Models;


class Voice extends Model {

    public function __construct(
        protected string $fileId,
        protected string $fileUniqueId,
        protected int $duration,
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
     * @return Voice
     */
    public function setFileId(string $fileId): Voice {
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
     * @return Voice
     */
    public function setFileUniqueId(string $fileUniqueId): Voice {
        $this->fileUniqueId = $fileUniqueId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Voice
     */
    public function setDuration(int $duration): Voice {
        $this->duration = $duration;
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
     * @return Voice
     */
    public function setMimeType(?string $mimeType): Voice {
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
     * @return Voice
     */
    public function setFileSize(?int $fileSize): Voice {
        $this->fileSize = $fileSize;
        return $this;
    }

}