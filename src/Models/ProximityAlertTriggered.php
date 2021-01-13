<?php


namespace Infureal\Telegram\Models;


class ProximityAlertTriggered extends Model {

    public function __construct(
        protected User $traveler,
        protected User $watcher,
        protected int $distance,
    ) {}

    /**
     * @return User
     */
    public function getTraveler(): User {
        return $this->traveler;
    }

    /**
     * @param User $traveler
     * @return ProximityAlertTriggered
     */
    public function setTraveler(User $traveler): ProximityAlertTriggered {
        $this->traveler = $traveler;
        return $this;
    }

    /**
     * @return User
     */
    public function getWatcher(): User {
        return $this->watcher;
    }

    /**
     * @param User $watcher
     * @return ProximityAlertTriggered
     */
    public function setWatcher(User $watcher): ProximityAlertTriggered {
        $this->watcher = $watcher;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistance(): int {
        return $this->distance;
    }

    /**
     * @param int $distance
     * @return ProximityAlertTriggered
     */
    public function setDistance(int $distance): ProximityAlertTriggered {
        $this->distance = $distance;
        return $this;
    }

}