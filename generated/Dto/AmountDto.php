<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * Amount DTO
 *
 * @property int|float|null $minimum
 * @property int|float|null $maximum
 */
class AmountDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_MINIMUM = 'minimum';

    /**
     * @var string
     */
    public const FIELD_MAXIMUM = 'maximum';

    /**
     * @var int|float|null
     */
    protected int|float|null $minimum = null;

    /**
     * @var int|float|null
     */
    protected int|float|null $maximum = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'minimum' => [
            'type' => 'int|float',
            'name' => 'minimum',
            'required' => false,
            'defaultValue' => null,
            'dto' => null,
            'collectionType' => null,
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
        ],
        'maximum' => [
            'type' => 'int|float',
            'name' => 'maximum',
            'required' => false,
            'defaultValue' => null,
            'dto' => null,
            'collectionType' => null,
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
        ],
    ];

    /**
     * @var array<string, array<string, string>>
     */
    protected array $_keyMap = [
        'underscored' => [
            'minimum' => 'minimum',
            'maximum' => 'maximum',
        ],
        'dashed' => [
            'minimum' => 'minimum',
            'maximum' => 'maximum',
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
        if (isset($data['minimum'])) {
            /** @var int|float|null $value */
            $value = $data['minimum'];
            $this->minimum = $value;
            $this->_touchedFields['minimum'] = true;
        }
        if (isset($data['maximum'])) {
            /** @var int|float|null $value */
            $value = $data['maximum'];
            $this->maximum = $value;
            $this->_touchedFields['maximum'] = true;
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
            'minimum' => $this->minimum,
            'maximum' => $this->maximum,
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
    protected function validate(): void {}
    /**
     * @param int|float|null $minimum
     *
     * @return $this
     */
    public function setMinimum(int|float|null $minimum = null)
    {
        $this->minimum = $minimum;
        $this->_touchedFields[static::FIELD_MINIMUM] = true;

        return $this;
    }

    /**
     * @param int|float $minimum
     *
     * @return $this
     */
    public function setMinimumOrFail(int|float $minimum)
    {
        $this->minimum = $minimum;
        $this->_touchedFields[static::FIELD_MINIMUM] = true;

        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getMinimum(): int|float|null
    {
        return $this->minimum;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return int|float
     */
    public function getMinimumOrFail(): int|float
    {
        $value = $this->getMinimum();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `minimum` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasMinimum(): bool
    {
        return $this->minimum !== null;
    }

    /**
     * @param int|float|null $maximum
     *
     * @return $this
     */
    public function setMaximum(int|float|null $maximum = null)
    {
        $this->maximum = $maximum;
        $this->_touchedFields[static::FIELD_MAXIMUM] = true;

        return $this;
    }

    /**
     * @param int|float $maximum
     *
     * @return $this
     */
    public function setMaximumOrFail(int|float $maximum)
    {
        $this->maximum = $maximum;
        $this->_touchedFields[static::FIELD_MAXIMUM] = true;

        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getMaximum(): int|float|null
    {
        return $this->maximum;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return int|float
     */
    public function getMaximumOrFail(): int|float
    {
        $value = $this->getMaximum();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `maximum` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasMaximum(): bool
    {
        return $this->maximum !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{minimum: int|float|null, maximum: int|float|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{minimum: int|float|null, maximum: int|float|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{minimum: int|float|null, maximum: int|float|null} $data
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
