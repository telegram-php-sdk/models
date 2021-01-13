<?php


namespace Infureal\Telegram\Models;


class PhotoSize extends Model {

    public function __construct(
        protected string $fileId,
        protected string $fileUniqueId,
        protected string $width,
        protected string $height,
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
     * @return PhotoSize
     */
    public function setFileId(string $fileId): PhotoSize {
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
     * @return PhotoSize
     */
    public function setFileUniqueId(string $fileUniqueId): PhotoSize {
        $this->fileUniqueId = $fileUniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWidth(): string {
        return $this->width;
    }

    /**
     * @param string $width
     * @return PhotoSize
     */
    public function setWidth(string $width): PhotoSize {
        $this->width = $width;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeight(): string {
        return $this->height;
    }

    /**
     * @param string $height
     * @return PhotoSize
     */
    public function setHeight(string $height): PhotoSize {
        $this->height = $height;
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
     * @return PhotoSize
     */
    public function setFileSize(?int $fileSize): PhotoSize {
        $this->fileSize = $fileSize;
        return $this;
    }



}