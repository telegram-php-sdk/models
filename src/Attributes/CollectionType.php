<?php


namespace Infureal\Telegram\Attributes;

#[\Attribute]
class CollectionType {

    public function __construct(protected string $type) {}

    function validate($value): bool {

        if (!is_object($value))
            return gettype($value) === $this->type;

        $reflection = new \ReflectionClass($value);
        return $reflection->isSubclassOf($this->type) || $reflection->getName() == $this->type;
    }

    function getType(): string {
        return $this->type;
    }

}