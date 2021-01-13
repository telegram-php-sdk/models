<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Collections\PhotoSizeCollection;

class Game extends Model {

    public function __construct(
        protected string $title,
        protected string $description,
        protected PhotoSizeCollection $photo,
        protected ?string $text = null,
        protected ?MessageEntityCollection $textEntities = null,
        protected ?Animation $animation = null,
    ) {}

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Game
     */
    public function setTitle(string $title): Game {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Game
     */
    public function setDescription(string $description): Game {
        $this->description = $description;
        return $this;
    }

    /**
     * @return PhotoSizeCollection
     */
    public function getPhoto(): PhotoSizeCollection {
        return $this->photo;
    }

    /**
     * @param PhotoSizeCollection $photo
     * @return Game
     */
    public function setPhoto(PhotoSizeCollection $photo): Game {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * @param string|null $text
     * @return Game
     */
    public function setText(?string $text): Game {
        $this->text = $text;
        return $this;
    }

    /**
     * @return MessageEntityCollection|null
     */
    public function getTextEntities(): ?MessageEntityCollection {
        return $this->textEntities;
    }

    /**
     * @param MessageEntityCollection|null $textEntities
     * @return Game
     */
    public function setTextEntities(?MessageEntityCollection $textEntities): Game {
        $this->textEntities = $textEntities;
        return $this;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation {
        return $this->animation;
    }

    /**
     * @param Animation|null $animation
     * @return Game
     */
    public function setAnimation(?Animation $animation): Game {
        $this->animation = $animation;
        return $this;
    }

}