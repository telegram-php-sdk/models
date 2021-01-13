<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InputMediaType;
use Infureal\Telegram\Enums\ParseMode;

class InputMediaAudio extends InputMedia {

    public function __construct(
        string $media,
        ?string $caption = null,
        ?MessageEntityCollection $captionEntities = null,
        ?ParseMode $parseMode = null,
        protected string|InputFile|null $thumb = null,
        protected ?int $duration = null,
        protected ?string $performer = null,
        protected ?string $title = null,
    ) {
        parent::__construct(InputMediaType::AUDIO(), $media, $caption, $captionEntities, $parseMode);
    }

    /**
     * @return InputFile|string|null
     */
    public function getThumb(): InputFile|string|null {
        return $this->thumb;
    }

    /**
     * @param InputFile|string|null $thumb
     * @return InputMediaAudio
     */
    public function setThumb(InputFile|string|null $thumb): InputMediaAudio {
        $this->thumb = $thumb;
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
     * @return InputMediaAudio
     */
    public function setDuration(?int $duration): InputMediaAudio {
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
     * @return InputMediaAudio
     */
    public function setPerformer(?string $performer): InputMediaAudio {
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
     * @return InputMediaAudio
     */
    public function setTitle(?string $title): InputMediaAudio {
        $this->title = $title;
        return $this;
    }

}