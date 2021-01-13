<?php


namespace Infureal\Telegram\Models;


class ChatLocation extends Model {

    public function __construct(
        protected Location $location,
        protected string $address,
    ) {}

    /**
     * @return Location
     */
    public function getLocation(): Location {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return ChatLocation
     */
    public function setLocation(Location $location): ChatLocation {
        $this->location = $location;
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
     * @return ChatLocation
     */
    public function setAddress(string $address): ChatLocation {
        $this->address = $address;
        return $this;
    }

}