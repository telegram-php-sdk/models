<?php


namespace Infureal\Telegram\Models;


class Video extends Model {

    public function __construct(
        protected string $fileId,
        protected string $fileUniqueId,
        protected int $width,
        protected int $height,
        protected int $duration,
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
     * @return Video
     */
    public function setFileId(string $fileId): Video {
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
     * @return Video
     */
    public function setFileUniqueId(string $fileUniqueId): Video {
        $this->fileUniqueId = $fileUniqueId;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Video
     */
    public function setWidth(int $width): Video {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Video
     */
    public function setHeight(int $height): Video {
        $this->height = $height;
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
     * @return Video
     */
    public function setDuration(int $duration): Video {
        $this->duration = $duration;
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
     * @return Video
     */
    public function setThumb(?PhotoSize $thumb): Video {
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
     * @return Video
     */
    public function setFileName(?string $fileName): Video {
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
     * @return Video
     */
    public function setMimeType(?string $mimeType): Video {
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
     * @return Video
     */
    public function setFileSize(?int $fileSize): Video {
        $this->fileSize = $fileSize;
        return $this;
    }

}