<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InputMediaType;
use Infureal\Telegram\Enums\ParseMode;

class InputMediaAnimation extends InputMedia {

    public function __construct(
        string $media,
        ?string $caption = null,
        ?MessageEntityCollection $captionEntities = null,
        ?ParseMode $parseMode = null,
        protected string|InputFile|null $thumb = null,
        protected ?int $width = null,
        protected ?int $height = null,
        protected ?int $duration = null,
    ) {
        parent::__construct(InputMediaType::ANIMATION(), $media, $caption, $captionEntities, $parseMode);
    }

    /**
     * @return InputFile|string|null
     */
    public function getThumb(): InputFile|string|null {
        return $this->thumb;
    }

    /**
     * @param InputFile|string|null $thumb
     * @return InputMediaAnimation
     */
    public function setThumb(InputFile|string|null $thumb): InputMediaAnimation {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return InputMediaAnimation
     */
    public function setWidth(?int $width): InputMediaAnimation {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * @param int|null $height
     * @return InputMediaAnimation
     */
    public function setHeight(?int $height): InputMediaAnimation {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     * @return InputMediaAnimation
     */
    public function setDuration(?int $duration): InputMediaAnimation {
        $this->duration = $duration;
        return $this;
    }

}