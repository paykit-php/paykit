<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * Fee DTO
 *
 * @property int|null $flat
 * @property float|null $percent
 */
class FeeDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_FLAT = 'flat';

    /**
     * @var string
     */
    public const FIELD_PERCENT = 'percent';

    /**
     * @var int|null
     */
    protected ?int $flat = null;

    /**
     * @var float|null
     */
    protected ?float $percent = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'flat' => [
            'type' => 'int',
            'name' => 'flat',
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
        'percent' => [
            'type' => 'float',
            'name' => 'percent',
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
            'flat' => 'flat',
            'percent' => 'percent',
        ],
        'dashed' => [
            'flat' => 'flat',
            'percent' => 'percent',
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
        if (isset($data['flat'])) {
            /** @var int|null $value */
            $value = $data['flat'];
            $this->flat = $value;
            $this->_touchedFields['flat'] = true;
        }
        if (isset($data['percent'])) {
            /** @var float|null $value */
            $value = $data['percent'];
            $this->percent = $value;
            $this->_touchedFields['percent'] = true;
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
            'flat' => $this->flat,
            'percent' => $this->percent,
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
     * @param int|null $flat
     *
     * @return $this
     */
    public function setFlat(?int $flat = null)
    {
        $this->flat = $flat;
        $this->_touchedFields[static::FIELD_FLAT] = true;

        return $this;
    }

    /**
     * @param int $flat
     *
     * @return $this
     */
    public function setFlatOrFail(int $flat)
    {
        $this->flat = $flat;
        $this->_touchedFields[static::FIELD_FLAT] = true;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFlat(): ?int
    {
        return $this->flat;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return int
     */
    public function getFlatOrFail(): int
    {
        $value = $this->getFlat();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `flat` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasFlat(): bool
    {
        return $this->flat !== null;
    }

    /**
     * @param float|null $percent
     *
     * @return $this
     */
    public function setPercent(?float $percent = null)
    {
        $this->percent = $percent;
        $this->_touchedFields[static::FIELD_PERCENT] = true;

        return $this;
    }

    /**
     * @param float $percent
     *
     * @return $this
     */
    public function setPercentOrFail(float $percent)
    {
        $this->percent = $percent;
        $this->_touchedFields[static::FIELD_PERCENT] = true;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return float
     */
    public function getPercentOrFail(): float
    {
        $value = $this->getPercent();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `percent` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasPercent(): bool
    {
        return $this->percent !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{flat: int|null, percent: float|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{flat: int|null, percent: float|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{flat: int|null, percent: float|null} $data
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
