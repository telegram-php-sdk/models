<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InputMediaType;
use Infureal\Telegram\Enums\ParseMode;

abstract class InputMedia extends Model {

    public function __construct(
        protected InputMediaType $type,
        protected string $media,
        protected ?string $caption = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?ParseMode $parseMode = null,
    ) {}

    /**
     * @return InputMediaType
     */
    public function getType(): InputMediaType {
        return $this->type;
    }

    /**
     * @param InputMediaType $type
     * @return InputMedia
     */
    public function setType(InputMediaType $type): InputMedia {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getMedia(): string {
        return $this->media;
    }

    /**
     * @param string $media
     * @return InputMedia
     */
    public function setMedia(string $media): InputMedia {
        $this->media = $media;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     * @return InputMedia
     */
    public function setCaption(?string $caption): InputMedia {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return MessageEntityCollection|null
     */
    public function getCaptionEntities(): ?MessageEntityCollection {
        return $this->captionEntities;
    }

    /**
     * @param MessageEntityCollection|null $captionEntities
     * @return InputMedia
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): InputMedia {
        $this->captionEntities = $captionEntities;
        return $this;
    }

    /**
     * @return ParseMode|null
     */
    public function getParseMode(): ?ParseMode {
        return $this->parseMode;
    }

    /**
     * @param ParseMode|null $parseMode
     * @return InputMedia
     */
    public function setParseMode(?ParseMode $parseMode): InputMedia {
        $this->parseMode = $parseMode;
        return $this;
    }

}