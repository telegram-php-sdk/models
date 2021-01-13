<?php


namespace Infureal\Telegram\Models;


class InputLocationMessageContent extends InputMessageContent {

    public function __construct(
        protected float $latitude,
        protected float $longitude,
        protected ?float $horizontalAccuracy = null,
        protected ?int $livePeriod = null,
        protected ?int $heading = null,
        protected ?int $proximityAlertRadius = null,
    ) {}

    /**
     * @return float
     */
    public function getLatitude(): float {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return InputLocationMessageContent
     */
    public function setLatitude(float $latitude): InputLocationMessageContent {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude(): float {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return InputLocationMessageContent
     */
    public function setLongitude(float $longitude): InputLocationMessageContent {
        $this->longitude = $longitude;
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
     * @return InputLocationMessageContent
     */
    public function setHorizontalAccuracy(?float $horizontalAccuracy): InputLocationMessageContent {
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
     * @return InputLocationMessageContent
     */
    public function setLivePeriod(?int $livePeriod): InputLocationMessageContent {
        $this->livePeriod = $livePeriod;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeading(): ?int {
        return $this->heading;
    }

    /**
     * @param int|null $heading
     * @return InputLocationMessageContent
     */
    public function setHeading(?int $heading): InputLocationMessageContent {
        $this->heading = $heading;
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
     * @return InputLocationMessageContent
     */
    public function setProximityAlertRadius(?int $proximityAlertRadius): InputLocationMessageContent {
        $this->proximityAlertRadius = $proximityAlertRadius;
        return $this;
    }

}