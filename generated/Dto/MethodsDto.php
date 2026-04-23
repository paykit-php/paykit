<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use InvalidArgumentException;
use PhpCollective\Dto\Dto\AbstractDto;

/**
 * Methods DTO
 *
 * @property \ArrayObject<int, \Paykit\Dto\MethodDto> $items
 */
class MethodsDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_ITEMS = 'items';

    /**
     * @var \ArrayObject<int, \Paykit\Dto\MethodDto>
     */
    protected ?\ArrayObject $items = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'items' => [
            'type' => '\Paykit\Dto\MethodDto[]|\ArrayObject',
            'required' => true,
            'name' => 'items',
            'defaultValue' => null,
            'dto' => null,
            'collectionType' => '\ArrayObject',
            'associative' => false,
            'key' => null,
            'serialize' => null,
            'factory' => null,
            'mapFrom' => null,
            'mapTo' => null,
            'transformFrom' => null,
            'transformTo' => null,
            'minLength' => null,
            'maxLength' => null,
            'min' => null,
            'max' => null,
            'pattern' => null,
            'lazy' => false,
            'singularType' => '\Paykit\Dto\MethodDto',
            'singularNullable' => false,
            'singularTypeHint' => '\Paykit\Dto\MethodDto',
        ],
    ];

    /**
     * @var array<string, array<string, string>>
     */
    protected array $_keyMap = [
        'underscored' => [
            'items' => 'items',
        ],
        'dashed' => [
            'items' => 'items',
        ],
    ];

    /**
     * Whether this DTO is immutable.
     *
     * @var bool
     */
    protected const IS_IMMUTABLE = false;

    /**
     * Whether this DTO has generated fast-path methods.
     *
     * @var bool
     */
    protected const HAS_FAST_PATH = true;

    /**
     * Optimized array assignment without dynamic method calls.
     *
     * @param array<string, mixed> $data
     *
     * @return void
     */
    protected function setFromArrayFast(array $data): void
    {
        if (isset($data['items'])) {
            $collection = new \ArrayObject([]);
            /** @var array $items */
            $items = $data['items'];
            foreach ($items as $key => $item) {
                if (is_array($item)) {
                    $item = new \Paykit\Dto\MethodDto($item);
                }
                $collection->append($item);
            }
            $this->items = $collection;
            $this->_touchedFields['items'] = true;
        }
    }

    /**
     * Optimized toArray for default type without dynamic dispatch.
     *
     * @return array<string, mixed>
     */
    protected function toArrayFast(): array
    {
        return [
            'items' => $this->items !== null ? (static function (\Traversable $c): array {
                $r = [];
                foreach ($c as $k => $v) {
                    $r[$k] = $v->toArray();
                }

                return $r;
            })($this->items) : [],
        ];
    }

    /**
     * Optimized setDefaults - only processes fields with default values.
     *
     * @return $this
     */
    protected function setDefaults()
    {
        return $this;
    }

    /**
     * Optimized validate - checks required fields and validation rules.
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    protected function validate(): void
    {
        if (!isset($this->items)) {
            $errors = [];
            if (!isset($this->items)) {
                $errors[] = 'items';
            }
            if ($errors) {
                throw new InvalidArgumentException('Required fields missing: ' . implode(', ', $errors));
            }
        }
    }
    /**
     * @param \ArrayObject<int, \Paykit\Dto\MethodDto> $items
     *
     * @return $this
     */
    public function setItems(\ArrayObject $items)
    {
        $this->items = $items;
        $this->_touchedFields[static::FIELD_ITEMS] = true;

        return $this;
    }

    /**
     * @return \ArrayObject<int, \Paykit\Dto\MethodDto>
     */
    public function getItems(): \ArrayObject
    {
        if ($this->items === null) {
            return new \ArrayObject([]);
        }

        return $this->items;
    }

    /**
     * @return bool
     */
    public function hasItems(): bool
    {
        if ($this->items === null) {
            return false;
        }

        return $this->items->count() > 0;
    }

    /**
     * @param \Paykit\Dto\MethodDto $item
     *
     * @return $this
     */
    public function addItem(\Paykit\Dto\MethodDto $item)
    {
        if ($this->items === null) {
            $this->items = new \ArrayObject([]);
        }

        $this->items[] = $item;
        $this->_touchedFields[static::FIELD_ITEMS] = true;

        return $this;
    }

    /**
     * @param int $key
     *
     * @return $this
     */
    public function removeItem($key)
    {
        if ($this->items === null) {
            return $this;
        }

        if ($this->items->offsetExists($key)) {
            $this->items->offsetUnset($key);
        }
        $this->_touchedFields[static::FIELD_ITEMS] = true;

        return $this;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{items: array<int, array{code: string, name: string, imageUrl: string|null, fee: array{flat: int|null, percent: float|null}|null, amount: array{minimum: int|float|null, maximum: int|float|null}|null}>}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{items: array<int, array{code: string, name: string, imageUrl: string|null, fee: array{flat: int|null, percent: float|null}|null, amount: array{minimum: int|float|null, maximum: int|float|null}|null}>} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{items: array<int, array{code: string, name: string, imageUrl: string|null, fee: array{flat: int|null, percent: float|null}|null, amount: array{minimum: int|float|null, maximum: int|float|null}|null}>} $data
     * @param bool $ignoreMissing
     * @param string|null $type
     *
     * @return static
     */
    public static function createFromArray(array $data, bool $ignoreMissing = false, ?string $type = null): static
    {
        return static::_createFromArrayInternal($data, $ignoreMissing, $type);
    }
}
