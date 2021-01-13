<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InputMediaType;
use Infureal\Telegram\Enums\ParseMode;

class InputMediaVideo extends InputMedia {

    public function __construct(
        string $media,
        ?string $caption = null,
        ?MessageEntityCollection $captionEntities = null,
        ?ParseMode $parseMode = null,
        protected string|InputFile|null $thumb = null,
        protected ?int $width = null,
        protected ?int $height = null,
        protected ?int $duration = null,
        protected ?bool $supportsStreaming = null,
    ) {
        parent::__construct(InputMediaType::VIDEO(), $media, $caption, $captionEntities, $parseMode);
    }

    /**
     * @return InputFile|string|null
     */
    public function getThumb(): InputFile|string|null {
        return $this->thumb;
    }

    /**
     * @param InputFile|string|null $thumb
     * @return InputMediaVideo
     */
    public function setThumb(InputFile|string|null $thumb): InputMediaVideo {
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
     * @return InputMediaVideo
     */
    public function setWidth(?int $width): InputMediaVideo {
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
     * @return InputMediaVideo
     */
    public function setHeight(?int $height): InputMediaVideo {
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
     * @return InputMediaVideo
     */
    public function setDuration(?int $duration): InputMediaVideo {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSupportsStreaming(): ?bool {
        return $this->supportsStreaming;
    }

    /**
     * @param bool|null $supportsStreaming
     * @return InputMediaVideo
     */
    public function setSupportsStreaming(?bool $supportsStreaming): InputMediaVideo {
        $this->supportsStreaming = $supportsStreaming;
        return $this;
    }

}