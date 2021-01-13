<?php


namespace Infureal\Telegram\Models;


class Sticker extends Model {

    public function __construct(
        protected string $fileId,
        protected string $fileUniqueId,
        protected int $width,
        protected int $height,
        protected bool $isAnimated,
        protected ?PhotoSize $thumb = null,
        protected ?string $emoji = null,
        protected ?string $setName = null,
        protected ?MaskPosition $maskPosition = null,
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
     * @return Sticker
     */
    public function setFileId(string $fileId): Sticker {
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
     * @return Sticker
     */
    public function setFileUniqueId(string $fileUniqueId): Sticker {
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
     * @return Sticker
     */
    public function setWidth(int $width): Sticker {
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
     * @return Sticker
     */
    public function setHeight(int $height): Sticker {
        $this->height = $height;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAnimated(): bool {
        return $this->isAnimated;
    }

    /**
     * @param bool $isAnimated
     * @return Sticker
     */
    public function setIsAnimated(bool $isAnimated): Sticker {
        $this->isAnimated = $isAnimated;
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
     * @return Sticker
     */
    public function setThumb(?PhotoSize $thumb): Sticker {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmoji(): ?string {
        return $this->emoji;
    }

    /**
     * @param string|null $emoji
     * @return Sticker
     */
    public function setEmoji(?string $emoji): Sticker {
        $this->emoji = $emoji;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSetName(): ?string {
        return $this->setName;
    }

    /**
     * @param string|null $setName
     * @return Sticker
     */
    public function setSetName(?string $setName): Sticker {
        $this->setName = $setName;
        return $this;
    }

    /**
     * @return MaskPosition|null
     */
    public function getMaskPosition(): ?MaskPosition {
        return $this->maskPosition;
    }

    /**
     * @param MaskPosition|null $maskPosition
     * @return Sticker
     */
    public function setMaskPosition(?MaskPosition $maskPosition): Sticker {
        $this->maskPosition = $maskPosition;
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
     * @return Sticker
     */
    public function setFileSize(?int $fileSize): Sticker {
        $this->fileSize = $fileSize;
        return $this;
    }

}