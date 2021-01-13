<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\InlineQueryResultType;

class InlineQueryResultVenue extends InlineQueryResult {

    public function __construct(
        string $id,
        protected float $longitude,
        protected float $latitude,
        protected string $title,
        protected string $address,
        protected ?string $foursquareId = null,
        protected ?string $foursquareType = null,
        protected ?string $googlePlaceId = null,
        protected ?string $googlePlaceType = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
        protected ?InputMessageContent $inputMessageContent = null,
        protected ?string $thumbUrl = null,
        protected ?int $thumbWidth = null,
        protected ?int $thumbHeight = null,
    ) {
        parent::__construct(InlineQueryResultType::VENUE(), $id);
    }

    /**
     * @return float
     */
    public function getLongitude(): float {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return InlineQueryResultVenue
     */
    public function setLongitude(float $longitude): InlineQueryResultVenue {
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
     * @return InlineQueryResultVenue
     */
    public function setLatitude(float $latitude): InlineQueryResultVenue {
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
     * @return InlineQueryResultVenue
     */
    public function setTitle(string $title): InlineQueryResultVenue {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string {
        return $this->address;
    }

    /**
     * @param string $address
     * @return InlineQueryResultVenue
     */
    public function setAddress(string $address): InlineQueryResultVenue {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFoursquareId(): ?string {
        return $this->foursquareId;
    }

    /**
     * @param string|null $foursquareId
     * @return InlineQueryResultVenue
     */
    public function setFoursquareId(?string $foursquareId): InlineQueryResultVenue {
        $this->foursquareId = $foursquareId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFoursquareType(): ?string {
        return $this->foursquareType;
    }

    /**
     * @param string|null $foursquareType
     * @return InlineQueryResultVenue
     */
    public function setFoursquareType(?string $foursquareType): InlineQueryResultVenue {
        $this->foursquareType = $foursquareType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGooglePlaceId(): ?string {
        return $this->googlePlaceId;
    }

    /**
     * @param string|null $googlePlaceId
     * @return InlineQueryResultVenue
     */
    public function setGooglePlaceId(?string $googlePlaceId): InlineQueryResultVenue {
        $this->googlePlaceId = $googlePlaceId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGooglePlaceType(): ?string {
        return $this->googlePlaceType;
    }

    /**
     * @param string|null $googlePlaceType
     * @return InlineQueryResultVenue
     */
    public function setGooglePlaceType(?string $googlePlaceType): InlineQueryResultVenue {
        $this->googlePlaceType = $googlePlaceType;
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
     * @return InlineQueryResultVenue
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): InlineQueryResultVenue {
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
     * @return InlineQueryResultVenue
     */
    public function setInputMessageContent(?InputMessageContent $inputMessageContent): InlineQueryResultVenue {
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
     * @return InlineQueryResultVenue
     */
    public function setThumbUrl(?string $thumbUrl): InlineQueryResultVenue {
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
     * @return InlineQueryResultVenue
     */
    public function setThumbWidth(?int $thumbWidth): InlineQueryResultVenue {
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
     * @return InlineQueryResultVenue
     */
    public function setThumbHeight(?int $thumbHeight): InlineQueryResultVenue {
        $this->thumbHeight = $thumbHeight;
        return $this;
    }

}