<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * PaymentVirtualAccount DTO
 *
 * @property string|null $name
 * @property string|null $number
 */
class PaymentVirtualAccountDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_NAME = 'name';

    /**
     * @var string
     */
    public const FIELD_NUMBER = 'number';

    /**
     * @var string|null
     */
    protected ?string $name = null;

    /**
     * @var string|null
     */
    protected ?string $number = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'name' => [
            'type' => 'string',
            'name' => 'name',
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
        'number' => [
            'type' => 'string',
            'name' => 'number',
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
            'name' => 'name',
            'number' => 'number',
        ],
        'dashed' => [
            'name' => 'name',
            'number' => 'number',
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
        if (isset($data['name'])) {
            /** @var string|null $value */
            $value = $data['name'];
            $this->name = $value;
            $this->_touchedFields['name'] = true;
        }
        if (isset($data['number'])) {
            /** @var string|null $value */
            $value = $data['number'];
            $this->number = $value;
            $this->_touchedFields['number'] = true;
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
            'name' => $this->name,
            'number' => $this->number,
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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null)
    {
        $this->name = $name;
        $this->_touchedFields[static::FIELD_NAME] = true;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setNameOrFail(string $name)
    {
        $this->name = $name;
        $this->_touchedFields[static::FIELD_NAME] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getNameOrFail(): string
    {
        $value = $this->getName();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `name` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasName(): bool
    {
        return $this->name !== null;
    }

    /**
     * @param string|null $number
     *
     * @return $this
     */
    public function setNumber(?string $number = null)
    {
        $this->number = $number;
        $this->_touchedFields[static::FIELD_NUMBER] = true;

        return $this;
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function setNumberOrFail(string $number)
    {
        $this->number = $number;
        $this->_touchedFields[static::FIELD_NUMBER] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getNumberOrFail(): string
    {
        $value = $this->getNumber();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `number` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasNumber(): bool
    {
        return $this->number !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{name: string|null, number: string|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{name: string|null, number: string|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{name: string|null, number: string|null} $data
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
