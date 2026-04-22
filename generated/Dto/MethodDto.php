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
 * Method DTO
 *
 * @property string $code
 * @property string $name
 * @property string|null $imageUrl
 * @property \Paykit\Dto\FeeDto|null $fee
 * @property \Paykit\Dto\AmountDto|null $amount
 */
class MethodDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_CODE = 'code';

    /**
     * @var string
     */
    public const FIELD_NAME = 'name';

    /**
     * @var string
     */
    public const FIELD_IMAGE_URL = 'imageUrl';

    /**
     * @var string
     */
    public const FIELD_FEE = 'fee';

    /**
     * @var string
     */
    public const FIELD_AMOUNT = 'amount';

    /**
     * @var string
     */
    protected string $code;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string|null
     */
    protected ?string $imageUrl = null;

    /**
     * @var \Paykit\Dto\FeeDto|null
     */
    protected ?\Paykit\Dto\FeeDto $fee = null;

    /**
     * @var \Paykit\Dto\AmountDto|null
     */
    protected ?\Paykit\Dto\AmountDto $amount = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'code' => [
            'type' => 'string',
            'required' => true,
            'name' => 'code',
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
        'name' => [
            'type' => 'string',
            'required' => true,
            'name' => 'name',
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
        'imageUrl' => [
            'type' => 'string',
            'name' => 'imageUrl',
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
        'fee' => [
            'type' => '\Paykit\Dto\FeeDto',
            'name' => 'fee',
            'required' => false,
            'defaultValue' => null,
            'dto' => 'Fee',
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
        'amount' => [
            'type' => '\Paykit\Dto\AmountDto',
            'name' => 'amount',
            'required' => false,
            'defaultValue' => null,
            'dto' => 'Amount',
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
            'code' => 'code',
            'name' => 'name',
            'image_url' => 'imageUrl',
            'fee' => 'fee',
            'amount' => 'amount',
        ],
        'dashed' => [
            'code' => 'code',
            'name' => 'name',
            'image-url' => 'imageUrl',
            'fee' => 'fee',
            'amount' => 'amount',
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
        if (isset($data['code'])) {
            /** @var string $value */
            $value = $data['code'];
            $this->code = $value;
            $this->_touchedFields['code'] = true;
        }
        if (isset($data['name'])) {
            /** @var string $value */
            $value = $data['name'];
            $this->name = $value;
            $this->_touchedFields['name'] = true;
        }
        if (isset($data['imageUrl'])) {
            /** @var string|null $value */
            $value = $data['imageUrl'];
            $this->imageUrl = $value;
            $this->_touchedFields['imageUrl'] = true;
        }
        if (isset($data['fee'])) {
            $value = $data['fee'];
            if (is_array($value)) {
                $value = new \Paykit\Dto\FeeDto($value);
            }
            /** @var ?\Paykit\Dto\FeeDto $value */
            $this->fee = $value;
            $this->_touchedFields['fee'] = true;
        }
        if (isset($data['amount'])) {
            $value = $data['amount'];
            if (is_array($value)) {
                $value = new \Paykit\Dto\AmountDto($value);
            }
            /** @var ?\Paykit\Dto\AmountDto $value */
            $this->amount = $value;
            $this->_touchedFields['amount'] = true;
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
            'code' => $this->code,
            'name' => $this->name,
            'imageUrl' => $this->imageUrl,
            'fee' => $this->fee !== null ? $this->fee->toArray() : null,
            'amount' => $this->amount !== null ? $this->amount->toArray() : null,
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
        if (!isset($this->code) || !isset($this->name)) {
            $errors = [];
            if (!isset($this->code)) {
                $errors[] = 'code';
            }
            if (!isset($this->name)) {
                $errors[] = 'name';
            }
            if ($errors) {
                throw new InvalidArgumentException('Required fields missing: ' . implode(', ', $errors));
            }
        }
    }
    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        $this->_touchedFields[static::FIELD_CODE] = true;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return bool
     */
    public function hasCode(): bool
    {
        return isset($this->code);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        $this->_touchedFields[static::FIELD_NAME] = true;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function hasName(): bool
    {
        return isset($this->name);
    }

    /**
     * @param string|null $imageUrl
     *
     * @return $this
     */
    public function setImageUrl(?string $imageUrl = null)
    {
        $this->imageUrl = $imageUrl;
        $this->_touchedFields[static::FIELD_IMAGE_URL] = true;

        return $this;
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrlOrFail(string $imageUrl)
    {
        $this->imageUrl = $imageUrl;
        $this->_touchedFields[static::FIELD_IMAGE_URL] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getImageUrlOrFail(): string
    {
        $value = $this->getImageUrl();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `imageUrl` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasImageUrl(): bool
    {
        return $this->imageUrl !== null;
    }

    /**
     * @param \Paykit\Dto\FeeDto|null $fee
     *
     * @return $this
     */
    public function setFee(?\Paykit\Dto\FeeDto $fee = null)
    {
        $this->fee = $fee;
        $this->_touchedFields[static::FIELD_FEE] = true;

        return $this;
    }

    /**
     * @param \Paykit\Dto\FeeDto $fee
     *
     * @return $this
     */
    public function setFeeOrFail(\Paykit\Dto\FeeDto $fee)
    {
        $this->fee = $fee;
        $this->_touchedFields[static::FIELD_FEE] = true;

        return $this;
    }

    /**
     * @return \Paykit\Dto\FeeDto|null
     */
    public function getFee(): ?\Paykit\Dto\FeeDto
    {
        return $this->fee;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return \Paykit\Dto\FeeDto
     */
    public function getFeeOrFail(): \Paykit\Dto\FeeDto
    {
        $value = $this->getFee();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `fee` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasFee(): bool
    {
        return $this->fee !== null;
    }

    /**
     * @param \Paykit\Dto\AmountDto|null $amount
     *
     * @return $this
     */
    public function setAmount(?\Paykit\Dto\AmountDto $amount = null)
    {
        $this->amount = $amount;
        $this->_touchedFields[static::FIELD_AMOUNT] = true;

        return $this;
    }

    /**
     * @param \Paykit\Dto\AmountDto $amount
     *
     * @return $this
     */
    public function setAmountOrFail(\Paykit\Dto\AmountDto $amount)
    {
        $this->amount = $amount;
        $this->_touchedFields[static::FIELD_AMOUNT] = true;

        return $this;
    }

    /**
     * @return \Paykit\Dto\AmountDto|null
     */
    public function getAmount(): ?\Paykit\Dto\AmountDto
    {
        return $this->amount;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return \Paykit\Dto\AmountDto
     */
    public function getAmountOrFail(): \Paykit\Dto\AmountDto
    {
        $value = $this->getAmount();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `amount` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasAmount(): bool
    {
        return $this->amount !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{code: string, name: string, imageUrl: string|null, fee: array{flat: int|null, percent: float|null}|null, amount: array{minimum: int|float|null, maximum: int|float|null}|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{code: string, name: string, imageUrl: string|null, fee: array{flat: int|null, percent: float|null}|null, amount: array{minimum: int|float|null, maximum: int|float|null}|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{code: string, name: string, imageUrl: string|null, fee: array{flat: int|null, percent: float|null}|null, amount: array{minimum: int|float|null, maximum: int|float|null}|null} $data
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
