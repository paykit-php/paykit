<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use InvalidArgumentException;
use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * Balance DTO
 *
 * @property string|null $currency
 * @property int|float $balance
 */
class BalanceDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_CURRENCY = 'currency';

    /**
     * @var string
     */
    public const FIELD_BALANCE = 'balance';

    /**
     * @var string|null
     */
    protected ?string $currency = null;

    /**
     * @var int|float
     */
    protected int|float $balance;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'currency' => [
            'type' => 'string',
            'name' => 'currency',
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
        'balance' => [
            'type' => 'int|float',
            'required' => true,
            'name' => 'balance',
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
            'currency' => 'currency',
            'balance' => 'balance',
        ],
        'dashed' => [
            'currency' => 'currency',
            'balance' => 'balance',
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
        if (isset($data['currency'])) {
            /** @var string|null $value */
            $value = $data['currency'];
            $this->currency = $value;
            $this->_touchedFields['currency'] = true;
        }
        if (isset($data['balance'])) {
            /** @var int|float $value */
            $value = $data['balance'];
            $this->balance = $value;
            $this->_touchedFields['balance'] = true;
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
            'currency' => $this->currency,
            'balance' => $this->balance,
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
        if (!isset($this->balance)) {
            $errors = [];
            if (!isset($this->balance)) {
                $errors[] = 'balance';
            }
            if ($errors) {
                throw new InvalidArgumentException('Required fields missing: ' . implode(', ', $errors));
            }
        }
    }
    /**
     * @param string|null $currency
     *
     * @return $this
     */
    public function setCurrency(?string $currency = null)
    {
        $this->currency = $currency;
        $this->_touchedFields[static::FIELD_CURRENCY] = true;

        return $this;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrencyOrFail(string $currency)
    {
        $this->currency = $currency;
        $this->_touchedFields[static::FIELD_CURRENCY] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getCurrencyOrFail(): string
    {
        $value = $this->getCurrency();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `currency` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasCurrency(): bool
    {
        return $this->currency !== null;
    }

    /**
     * @param int|float $balance
     *
     * @return $this
     */
    public function setBalance(int|float $balance)
    {
        $this->balance = $balance;
        $this->_touchedFields[static::FIELD_BALANCE] = true;

        return $this;
    }

    /**
     * @return int|float
     */
    public function getBalance(): int|float
    {
        return $this->balance;
    }

    /**
     * @return bool
     */
    public function hasBalance(): bool
    {
        return isset($this->balance);
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{currency: string|null, balance: int|float}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{currency: string|null, balance: int|float} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{currency: string|null, balance: int|float} $data
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
