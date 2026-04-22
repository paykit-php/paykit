<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * PaymentDetails DTO
 *
 * @property \Paykit\Dto\PaymentQrisDto|null $qris
 * @property \Paykit\Dto\PaymentVirtualAccountDto|null $virtualAccount
 */
class PaymentDetailsDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_QRIS = 'qris';

    /**
     * @var string
     */
    public const FIELD_VIRTUAL_ACCOUNT = 'virtualAccount';

    /**
     * @var \Paykit\Dto\PaymentQrisDto|null
     */
    protected ?\Paykit\Dto\PaymentQrisDto $qris = null;

    /**
     * @var \Paykit\Dto\PaymentVirtualAccountDto|null
     */
    protected ?\Paykit\Dto\PaymentVirtualAccountDto $virtualAccount = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'qris' => [
            'type' => '\Paykit\Dto\PaymentQrisDto',
            'name' => 'qris',
            'required' => false,
            'defaultValue' => null,
            'dto' => 'PaymentQris',
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
        'virtualAccount' => [
            'type' => '\Paykit\Dto\PaymentVirtualAccountDto',
            'name' => 'virtualAccount',
            'required' => false,
            'defaultValue' => null,
            'dto' => 'PaymentVirtualAccount',
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
            'qris' => 'qris',
            'virtual_account' => 'virtualAccount',
        ],
        'dashed' => [
            'qris' => 'qris',
            'virtual-account' => 'virtualAccount',
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
        if (isset($data['qris'])) {
            $value = $data['qris'];
            if (is_array($value)) {
                $value = new \Paykit\Dto\PaymentQrisDto($value);
            }
            /** @var ?\Paykit\Dto\PaymentQrisDto $value */
            $this->qris = $value;
            $this->_touchedFields['qris'] = true;
        }
        if (isset($data['virtualAccount'])) {
            $value = $data['virtualAccount'];
            if (is_array($value)) {
                $value = new \Paykit\Dto\PaymentVirtualAccountDto($value);
            }
            /** @var ?\Paykit\Dto\PaymentVirtualAccountDto $value */
            $this->virtualAccount = $value;
            $this->_touchedFields['virtualAccount'] = true;
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
            'qris' => $this->qris !== null ? $this->qris->toArray() : null,
            'virtualAccount' => $this->virtualAccount !== null ? $this->virtualAccount->toArray() : null,
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
     * @param \Paykit\Dto\PaymentQrisDto|null $qris
     *
     * @return $this
     */
    public function setQris(?\Paykit\Dto\PaymentQrisDto $qris = null)
    {
        $this->qris = $qris;
        $this->_touchedFields[static::FIELD_QRIS] = true;

        return $this;
    }

    /**
     * @param \Paykit\Dto\PaymentQrisDto $qris
     *
     * @return $this
     */
    public function setQrisOrFail(\Paykit\Dto\PaymentQrisDto $qris)
    {
        $this->qris = $qris;
        $this->_touchedFields[static::FIELD_QRIS] = true;

        return $this;
    }

    /**
     * @return \Paykit\Dto\PaymentQrisDto|null
     */
    public function getQris(): ?\Paykit\Dto\PaymentQrisDto
    {
        return $this->qris;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return \Paykit\Dto\PaymentQrisDto
     */
    public function getQrisOrFail(): \Paykit\Dto\PaymentQrisDto
    {
        $value = $this->getQris();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `qris` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasQris(): bool
    {
        return $this->qris !== null;
    }

    /**
     * @param \Paykit\Dto\PaymentVirtualAccountDto|null $virtualAccount
     *
     * @return $this
     */
    public function setVirtualAccount(?\Paykit\Dto\PaymentVirtualAccountDto $virtualAccount = null)
    {
        $this->virtualAccount = $virtualAccount;
        $this->_touchedFields[static::FIELD_VIRTUAL_ACCOUNT] = true;

        return $this;
    }

    /**
     * @param \Paykit\Dto\PaymentVirtualAccountDto $virtualAccount
     *
     * @return $this
     */
    public function setVirtualAccountOrFail(\Paykit\Dto\PaymentVirtualAccountDto $virtualAccount)
    {
        $this->virtualAccount = $virtualAccount;
        $this->_touchedFields[static::FIELD_VIRTUAL_ACCOUNT] = true;

        return $this;
    }

    /**
     * @return \Paykit\Dto\PaymentVirtualAccountDto|null
     */
    public function getVirtualAccount(): ?\Paykit\Dto\PaymentVirtualAccountDto
    {
        return $this->virtualAccount;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return \Paykit\Dto\PaymentVirtualAccountDto
     */
    public function getVirtualAccountOrFail(): \Paykit\Dto\PaymentVirtualAccountDto
    {
        $value = $this->getVirtualAccount();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `virtualAccount` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasVirtualAccount(): bool
    {
        return $this->virtualAccount !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{qris: array{url: string|null, string: string|null}|null, virtualAccount: array{name: string|null, number: string|null}|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{qris: array{url: string|null, string: string|null}|null, virtualAccount: array{name: string|null, number: string|null}|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{qris: array{url: string|null, string: string|null}|null, virtualAccount: array{name: string|null, number: string|null}|null} $data
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
