<?php


namespace Infureal\Telegram\Collections;

use Infureal\Telegram\Attributes\CollectionType;
use JetBrains\PhpStorm\Immutable;
use JetBrains\PhpStorm\Pure;

/**
 * Class Collection
 * @package Infureal\Telegram\Collections
 *
 */
abstract class Collection implements \Iterator, \ArrayAccess, \Countable {

    protected array $items;
    private int $__position;

    public function __construct() {
        $this->rewind();
    }

    protected function validate($value) {
        $reflection = new \ReflectionClass($this);
        $attributes = $reflection->getAttributes(CollectionType::class);

        foreach ($attributes as $attribute) {
            /** @var CollectionType $type */
            $type = $attribute->newInstance();
            if ($type->validate($value) == false)
                throw new \InvalidArgumentException("Value must me type of [{$type->getType()}].");
        }

    }

    function add($item): static {
        $this->validate($item);
        $this->items[] = $item;
        return $this;
    }

    #[Pure]
    public function count(): int {
        return count($this->items);
    }

    public function offsetExists($offset): bool {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset) {
        return $this->items[$offset] ?? null;
    }

    public function offsetSet($offset, $value) {
        $this->validate($value);
        $this->items[$offset] = $value;
    }

    public function offsetUnset($offset) {
        unset($this->items[$offset]);
    }

    public function current() {
        return $this->offsetGet($this->__position);
    }

    public function next() {
        $this->__position++;
    }

    public function key(): int {
        return $this->__position;
    }

    public function valid(): bool {
        return $this->offsetExists($this->__position);
    }

    public function rewind() {
        $this->__position = 0;
    }

    public function clear(): static {
        $this->items = [];
        return $this;
    }

    public function toArray(): array {
        return $this->items;
    }


}