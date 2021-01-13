<?php


namespace Infureal\Telegram\Models;


class Location extends Model {

    public function __construct(
        protected float $longitude,
        protected float $latitude,
        protected ?float $horizontalAccuracy = null,
        protected ?int $livePeriod = null,
        protected ?int $proximityAlertRadius = null,
    ) {}

    /**
     * @return float
     */
    public function getLongitude(): float {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Location
     */
    public function setLongitude(float $longitude): Location {
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
     * @return Location
     */
    public function setLatitude(float $latitude): Location {
        $this->latitude = $latitude;
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
     * @return Location
     */
    public function setHorizontalAccuracy(?float $horizontalAccuracy): Location {
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
     * @return Location
     */
    public function setLivePeriod(?int $livePeriod): Location {
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
     * @return Location
     */
    public function setProximityAlertRadius(?int $proximityAlertRadius): Location {
        $this->proximityAlertRadius = $proximityAlertRadius;
        return $this;
    }

}