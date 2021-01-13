<?php


namespace Infureal\Telegram\Models;


class Venue extends Model {

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
     * @return Venue
     */
    public function setLocation(Location $location): Venue {
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
     * @return Venue
     */
    public function setTitle(string $title): Venue {
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
     * @return Venue
     */
    public function setAddress(string $address): Venue {
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
     * @return Venue
     */
    public function setFoursquareId(?string $foursquareId): Venue {
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
     * @return Venue
     */
    public function setFoursquareType(?string $foursquareType): Venue {
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
     * @return Venue
     */
    public function setGooglePlaceId(?string $googlePlaceId): Venue {
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
     * @return Venue
     */
    public function setGooglePlaceType(?string $googlePlaceType): Venue {
        $this->googlePlaceType = $googlePlaceType;
        return $this;
    }

}