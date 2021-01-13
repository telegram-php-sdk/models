<?php


namespace Infureal\Telegram\Models;


class Audio extends Model {

    public function __construct(
        protected string $fileId,
        protected string $fileUniqueId,
        protected int $duration,
        protected ?string $performer = null,
        protected ?string $title = null,
        protected ?string $fileName = null,
        protected ?string $mimeType = null,
        protected ?int $fileSize = null,
        protected ?PhotoSize $thumb = null,
    ) {}

    /**
     * @return string
     */
    public function getFileId(): string {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     * @return Audio
     */
    public function setFileId(string $fileId): Audio {
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
     * @return Audio
     */
    public function setFileUniqueId(string $fileUniqueId): Audio {
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
     * @return Audio
     */
    public function setDuration(int $duration): Audio {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPerformer(): ?string {
        return $this->performer;
    }

    /**
     * @param string|null $performer
     * @return Audio
     */
    public function setPerformer(?string $performer): Audio {
        $this->performer = $performer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Audio
     */
    public function setTitle(?string $title): Audio {
        $this->title = $title;
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
     * @return Audio
     */
    public function setFileName(?string $fileName): Audio {
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
     * @return Audio
     */
    public function setMimeType(?string $mimeType): Audio {
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
     * @return Audio
     */
    public function setFileSize(?int $fileSize): Audio {
        $this->fileSize = $fileSize;
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
     * @return Audio
     */
    public function setThumb(?PhotoSize $thumb): Audio {
        $this->thumb = $thumb;
        return $this;
    }

}