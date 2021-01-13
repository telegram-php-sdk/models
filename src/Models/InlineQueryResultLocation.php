<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\InlineQueryResultType;

class InlineQueryResultLocation extends InlineQueryResult {

    public function __construct(
        string $id,
        protected float $longitude,
        protected float $latitude,
        protected string $title,
        protected ?float $horizontalAccuracy = null,
        protected ?int $livePeriod = null,
        protected ?int $proximityAlertRadius = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
        protected ?string $thumbUrl = null,
        protected ?int $thumbWidth = null,
        protected ?int $thumbHeight = null,
    ) {
        parent::__construct(InlineQueryResultType::LOCATION(), $id);
    }

    /**
     * @return float
     */
    public function getLongitude(): float {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return InlineQueryResultLocation
     */
    public function setLongitude(float $longitude): InlineQueryResultLocation {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude(): float {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return InlineQueryResultLocation
     */
    public function setLatitude(float $latitude): InlineQueryResultLocation {
        $this->latitude = $latitude;
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
     * @return InlineQueryResultLocation
     */
    public function setTitle(string $title): InlineQueryResultLocation {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getHorizontalAccuracy(): ?float {
        return $this->horizontalAccuracy;
    }

    /**
     * @param float|null $horizontalAccuracy
     * @return InlineQueryResultLocation
     */
    public function setHorizontalAccuracy(?float $horizontalAccuracy): InlineQueryResultLocation {
        $this->horizontalAccuracy = $horizontalAccuracy;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLivePeriod(): ?int {
        return $this->livePeriod;
    }

    /**
     * @param int|null $livePeriod
     * @return InlineQueryResultLocation
     */
    public function setLivePeriod(?int $livePeriod): InlineQueryResultLocation {
        $this->livePeriod = $livePeriod;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProximityAlertRadius(): ?int {
        return $this->proximityAlertRadius;
    }

    /**
     * @param int|null $proximityAlertRadius
     * @return InlineQueryResultLocation
     */
    public function setProximityAlertRadius(?int $proximityAlertRadius): InlineQueryResultLocation {
        $this->proximityAlertRadius = $proximityAlertRadius;
        return $this;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup {
        return $this->replyMarkup;
    }

    /**
     * @param InlineKeyboardMarkup|null $replyMarkup
     * @return InlineQueryResultLocation
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultLocation {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }

    /**
     * @return InputMessageContent|null
     */
    public function getInputMessageContent(): ?InputMessageContent {
        return $this->inputMessageContent;
    }

    /**
     * @param InputMessageContent|null $inputMessageContent
     * @return InlineQueryResultLocation
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultLocation {
        $this->inputMessageContent = $inputMessageContent;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbUrl(): ?string {
        return $this->thumbUrl;
    }

    /**
     * @param string|null $thumbUrl
     * @return InlineQueryResultLocation
     */
    public function setThumbUrl(?string $thumbUrl): InlineQueryResultLocation {
        $this->thumbUrl = $thumbUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbWidth(): ?int {
        return $this->thumbWidth;
    }

    /**
     * @param int|null $thumbWidth
     * @return InlineQueryResultLocation
     */
    public function setThumbWidth(?int $thumbWidth): InlineQueryResultLocation {
        $this->thumbWidth = $thumbWidth;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbHeight(): ?int {
        return $this->thumbHeight;
    }

    /**
     * @param int|null $thumbHeight
     * @return InlineQueryResultLocation
     */
    public function setThumbHeight(?int $thumbHeight): InlineQueryResultLocation {
        $this->thumbHeight = $thumbHeight;
        return $this;
    }

}