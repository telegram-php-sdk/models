<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\StickerCollection;

class StickerSet extends Model {

    public function __construct(
        protected string $name,
        protected string $title,
        protected bool $isAnimated,
        protected bool $containsMasks,
        protected StickerCollection $stickers,
        protected ?PhotoSize $thumb = null,
    ) {}

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     * @return StickerSet
     */
    public function setName(string $name): StickerSet {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return StickerSet
     */
    public function setTitle(string $title): StickerSet {
        $this->title = $title;
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
     * @return StickerSet
     */
    public function setIsAnimated(bool $isAnimated): StickerSet {
        $this->isAnimated = $isAnimated;
        return $this;
    }

    /**
     * @return bool
     */
    public function isContainsMasks(): bool {
        return $this->containsMasks;
    }

    /**
     * @param bool $containsMasks
     * @return StickerSet
     */
    public function setContainsMasks(bool $containsMasks): StickerSet {
        $this->containsMasks = $containsMasks;
        return $this;
    }

    /**
     * @return StickerCollection
     */
    public function getStickers(): StickerCollection {
        return $this->stickers;
    }

    /**
     * @param StickerCollection $stickers
     * @return StickerSet
     */
    public function setStickers(StickerCollection $stickers): StickerSet {
        $this->stickers = $stickers;
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
     * @return StickerSet
     */
    public function setThumb(?PhotoSize $thumb): StickerSet {
        $this->thumb = $thumb;
        return $this;
    }

}