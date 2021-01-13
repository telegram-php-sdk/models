<?php


namespace Infureal\Telegram\Models;


class InputVenueMessageContent extends InputMessageContent {

    public function __construct(
        protected Location $location,
        protected string $title,
        protected string $address,
        protected ?string $foursquareId = null,
        protected ?string $foursquareType = null,
        protected ?string $googlePlaceId = null,
        protected ?string $googlePlaceType = null,
    ) {}

    /**
     * @return Location
     */
    public function getLocation(): Location {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return InputVenueMessageContent
     */
    public function setLocation(Location $location): InputVenueMessageContent {
        $this->location = $location;
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
     * @return InputVenueMessageContent
     */
    public function setTitle(string $title): InputVenueMessageContent {
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
     * @return InputVenueMessageContent
     */
    public function setAddress(string $address): InputVenueMessageContent {
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
     * @return InputVenueMessageContent
     */
    public function setFoursquareId(?string $foursquareId): InputVenueMessageContent {
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
     * @return InputVenueMessageContent
     */
    public function setFoursquareType(?string $foursquareType): InputVenueMessageContent {
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
     * @return InputVenueMessageContent
     */
    public function setGooglePlaceId(?string $googlePlaceId): InputVenueMessageContent {
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
     * @return InputVenueMessageContent
     */
    public function setGooglePlaceType(?string $googlePlaceType): InputVenueMessageContent {
        $this->googlePlaceType = $googlePlaceType;
        return $this;
    }

}