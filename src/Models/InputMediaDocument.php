<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Enums\InputMediaType;
use Infureal\Telegram\Enums\ParseMode;

class InputMediaDocument extends InputMedia {

    public function __construct(
        string $media,
        ?string $caption = null,
        ?MessageEntityCollection $captionEntities = null,
        ?ParseMode $parseMode = null,
        protected string|InputFile|null $thumb = null,
        protected ?bool $disableContentTypeDetection = null,
    ) {
        parent::__construct(InputMediaType::DOCUMENT(), $media, $caption, $captionEntities, $parseMode);
    }

    /**
     * @return InputFile|string|null
     */
    public function getThumb(): InputFile|string|null {
        return $this->thumb;
    }

    /**
     * @param InputFile|string|null $thumb
     * @return InputMediaDocument
     */
    public function setThumb(InputFile|string|null $thumb): InputMediaDocument {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDisableContentTypeDetection(): ?bool {
        return $this->disableContentTypeDetection;
    }

    /**
     * @param bool|null $disableContentTypeDetection
     * @return InputMediaDocument
     */
    public function setDisableContentTypeDetection(?bool $disableContentTypeDetection): InputMediaDocument {
        $this->disableContentTypeDetection = $disableContentTypeDetection;
        return $this;
    }

}