<?php


namespace Infureal\Telegram\Models;


abstract class Model implements \JsonSerializable, \ArrayAccess {

    /**
     * @return array|\ReflectionProperty[]
     */
    private function getProperties(): array {
        $reflection = new \ReflectionClass($this);
        return $reflection->getProperties();
    }

    public function jsonSerialize() {
        $res = [];

        foreach ($this->getProperties() as $property) {
            $name = $property->getName();
            $value = $this->{$name};

            if (!is_null($value))
                $res[$name] = $value;

        }

        return $res;
    }

    public function offsetExists($offset) {
        foreach ($this->getProperties() as $property)
            if($property->getName() == $offset)
                return true;

        return false;
    }

    public function offsetGet($offset) {
        foreach ($this->getProperties() as $property)
            if(($name = $property->getName()) == $offset)
                return $this->{$name};

        return null;
    }

    public function offsetSet($offset, $value) {
        foreach ($this->getProperties() as $property)
            if(($name = $property->getName()) == $offset) {
                $this->{$name} = $value; break;
            }
    }

    public function offsetUnset($offset) {
        throw new \Exception("Cannot unset class property");
    }

}