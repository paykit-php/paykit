<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * Payment DTO
 *
 * @property string|null $orderId
 * @property string|null $referenceId
 * @property string|null $paymentUrl
 * @property int|float|null $amount
 * @property int|float|null $fee
 * @property \Paykit\Enums\PaymentStatus|null $status
 * @property \Paykit\Dto\PaymentDetailsDto|null $payment
 * @property array|null $raw
 */
class PaymentDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_ORDER_ID = 'orderId';

    /**
     * @var string
     */
    public const FIELD_REFERENCE_ID = 'referenceId';

    /**
     * @var string
     */
    public const FIELD_PAYMENT_URL = 'paymentUrl';

    /**
     * @var string
     */
    public const FIELD_AMOUNT = 'amount';

    /**
     * @var string
     */
    public const FIELD_FEE = 'fee';

    /**
     * @var string
     */
    public const FIELD_STATUS = 'status';

    /**
     * @var string
     */
    public const FIELD_PAYMENT = 'payment';

    /**
     * @var string
     */
    public const FIELD_RAW = 'raw';

    /**
     * @var string|null
     */
    protected ?string $orderId = null;

    /**
     * @var string|null
     */
    protected ?string $referenceId = null;

    /**
     * @var string|null
     */
    protected ?string $paymentUrl = null;

    /**
     * @var int|float|null
     */
    protected int|float|null $amount = null;

    /**
     * @var int|float|null
     */
    protected int|float|null $fee = null;

    /**
     * @var \Paykit\Enums\PaymentStatus|null
     */
    protected ?\Paykit\Enums\PaymentStatus $status = null;

    /**
     * @var \Paykit\Dto\PaymentDetailsDto|null
     */
    protected ?\Paykit\Dto\PaymentDetailsDto $payment = null;

    /**
     * @var array|null
     */
    protected ?array $raw = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'orderId' => [
            'type' => 'string',
            'name' => 'orderId',
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
        'referenceId' => [
            'type' => 'string',
            'name' => 'referenceId',
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
        'paymentUrl' => [
            'type' => 'string',
            'name' => 'paymentUrl',
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
        'amount' => [
            'type' => 'int|float',
            'name' => 'amount',
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
            'type' => 'int|float',
            'name' => 'fee',
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
        'status' => [
            'type' => '\Paykit\Enums\PaymentStatus',
            'name' => 'status',
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
            'isClass' => true,
            'enum' => 'string',
        ],
        'payment' => [
            'type' => '\Paykit\Dto\PaymentDetailsDto',
            'name' => 'payment',
            'required' => false,
            'defaultValue' => null,
            'dto' => 'PaymentDetails',
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
        'raw' => [
            'type' => 'array',
            'name' => 'raw',
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
            'order_id' => 'orderId',
            'reference_id' => 'referenceId',
            'payment_url' => 'paymentUrl',
            'amount' => 'amount',
            'fee' => 'fee',
            'status' => 'status',
            'payment' => 'payment',
            'raw' => 'raw',
        ],
        'dashed' => [
            'order-id' => 'orderId',
            'reference-id' => 'referenceId',
            'payment-url' => 'paymentUrl',
            'amount' => 'amount',
            'fee' => 'fee',
            'status' => 'status',
            'payment' => 'payment',
            'raw' => 'raw',
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
        if (isset($data['orderId'])) {
            /** @var string|null $value */
            $value = $data['orderId'];
            $this->orderId = $value;
            $this->_touchedFields['orderId'] = true;
        }
        if (isset($data['referenceId'])) {
            /** @var string|null $value */
            $value = $data['referenceId'];
            $this->referenceId = $value;
            $this->_touchedFields['referenceId'] = true;
        }
        if (isset($data['paymentUrl'])) {
            /** @var string|null $value */
            $value = $data['paymentUrl'];
            $this->paymentUrl = $value;
            $this->_touchedFields['paymentUrl'] = true;
        }
        if (isset($data['amount'])) {
            /** @var int|float|null $value */
            $value = $data['amount'];
            $this->amount = $value;
            $this->_touchedFields['amount'] = true;
        }
        if (isset($data['fee'])) {
            /** @var int|float|null $value */
            $value = $data['fee'];
            $this->fee = $value;
            $this->_touchedFields['fee'] = true;
        }
        if (isset($data['status'])) {
            $value = $data['status'];
            if (!$value instanceof \UnitEnum) {
                $value = \Paykit\Enums\PaymentStatus::tryFrom($value);
            }
            $this->status = $value;
            $this->_touchedFields['status'] = true;
        }
        if (isset($data['payment'])) {
            $value = $data['payment'];
            if (is_array($value)) {
                $value = new \Paykit\Dto\PaymentDetailsDto($value);
            }
            /** @var ?\Paykit\Dto\PaymentDetailsDto $value */
            $this->payment = $value;
            $this->_touchedFields['payment'] = true;
        }
        if (isset($data['raw'])) {
            /** @var array|null $value */
            $value = $data['raw'];
            $this->raw = $value;
            $this->_touchedFields['raw'] = true;
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
            'orderId' => $this->orderId,
            'referenceId' => $this->referenceId,
            'paymentUrl' => $this->paymentUrl,
            'amount' => $this->amount,
            'fee' => $this->fee,
            'status' => $this->status?->value,
            'payment' => $this->payment !== null ? $this->payment->toArray() : null,
            'raw' => $this->raw,
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
     * @param string|null $orderId
     *
     * @return $this
     */
    public function setOrderId(?string $orderId = null)
    {
        $this->orderId = $orderId;
        $this->_touchedFields[static::FIELD_ORDER_ID] = true;

        return $this;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderIdOrFail(string $orderId)
    {
        $this->orderId = $orderId;
        $this->_touchedFields[static::FIELD_ORDER_ID] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getOrderIdOrFail(): string
    {
        $value = $this->getOrderId();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `orderId` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasOrderId(): bool
    {
        return $this->orderId !== null;
    }

    /**
     * @param string|null $referenceId
     *
     * @return $this
     */
    public function setReferenceId(?string $referenceId = null)
    {
        $this->referenceId = $referenceId;
        $this->_touchedFields[static::FIELD_REFERENCE_ID] = true;

        return $this;
    }

    /**
     * @param string $referenceId
     *
     * @return $this
     */
    public function setReferenceIdOrFail(string $referenceId)
    {
        $this->referenceId = $referenceId;
        $this->_touchedFields[static::FIELD_REFERENCE_ID] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getReferenceIdOrFail(): string
    {
        $value = $this->getReferenceId();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `referenceId` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasReferenceId(): bool
    {
        return $this->referenceId !== null;
    }

    /**
     * @param string|null $paymentUrl
     *
     * @return $this
     */
    public function setPaymentUrl(?string $paymentUrl = null)
    {
        $this->paymentUrl = $paymentUrl;
        $this->_touchedFields[static::FIELD_PAYMENT_URL] = true;

        return $this;
    }

    /**
     * @param string $paymentUrl
     *
     * @return $this
     */
    public function setPaymentUrlOrFail(string $paymentUrl)
    {
        $this->paymentUrl = $paymentUrl;
        $this->_touchedFields[static::FIELD_PAYMENT_URL] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentUrl(): ?string
    {
        return $this->paymentUrl;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getPaymentUrlOrFail(): string
    {
        $value = $this->getPaymentUrl();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `paymentUrl` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasPaymentUrl(): bool
    {
        return $this->paymentUrl !== null;
    }

    /**
     * @param int|float|null $amount
     *
     * @return $this
     */
    public function setAmount(int|float|null $amount = null)
    {
        $this->amount = $amount;
        $this->_touchedFields[static::FIELD_AMOUNT] = true;

        return $this;
    }

    /**
     * @param int|float $amount
     *
     * @return $this
     */
    public function setAmountOrFail(int|float $amount)
    {
        $this->amount = $amount;
        $this->_touchedFields[static::FIELD_AMOUNT] = true;

        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getAmount(): int|float|null
    {
        return $this->amount;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return int|float
     */
    public function getAmountOrFail(): int|float
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
     * @param int|float|null $fee
     *
     * @return $this
     */
    public function setFee(int|float|null $fee = null)
    {
        $this->fee = $fee;
        $this->_touchedFields[static::FIELD_FEE] = true;

        return $this;
    }

    /**
     * @param int|float $fee
     *
     * @return $this
     */
    public function setFeeOrFail(int|float $fee)
    {
        $this->fee = $fee;
        $this->_touchedFields[static::FIELD_FEE] = true;

        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getFee(): int|float|null
    {
        return $this->fee;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return int|float
     */
    public function getFeeOrFail(): int|float
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
     * @param \Paykit\Enums\PaymentStatus|null $status
     *
     * @return $this
     */
    public function setStatus(?\Paykit\Enums\PaymentStatus $status = null)
    {
        $this->status = $status;
        $this->_touchedFields[static::FIELD_STATUS] = true;

        return $this;
    }

    /**
     * @param \Paykit\Enums\PaymentStatus $status
     *
     * @return $this
     */
    public function setStatusOrFail(\Paykit\Enums\PaymentStatus $status)
    {
        $this->status = $status;
        $this->_touchedFields[static::FIELD_STATUS] = true;

        return $this;
    }

    /**
     * @return \Paykit\Enums\PaymentStatus|null
     */
    public function getStatus(): ?\Paykit\Enums\PaymentStatus
    {
        return $this->status;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return \Paykit\Enums\PaymentStatus
     */
    public function getStatusOrFail(): \Paykit\Enums\PaymentStatus
    {
        $value = $this->getStatus();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `status` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasStatus(): bool
    {
        return $this->status !== null;
    }

    /**
     * @param \Paykit\Dto\PaymentDetailsDto|null $payment
     *
     * @return $this
     */
    public function setPayment(?\Paykit\Dto\PaymentDetailsDto $payment = null)
    {
        $this->payment = $payment;
        $this->_touchedFields[static::FIELD_PAYMENT] = true;

        return $this;
    }

    /**
     * @param \Paykit\Dto\PaymentDetailsDto $payment
     *
     * @return $this
     */
    public function setPaymentOrFail(\Paykit\Dto\PaymentDetailsDto $payment)
    {
        $this->payment = $payment;
        $this->_touchedFields[static::FIELD_PAYMENT] = true;

        return $this;
    }

    /**
     * @return \Paykit\Dto\PaymentDetailsDto|null
     */
    public function getPayment(): ?\Paykit\Dto\PaymentDetailsDto
    {
        return $this->payment;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return \Paykit\Dto\PaymentDetailsDto
     */
    public function getPaymentOrFail(): \Paykit\Dto\PaymentDetailsDto
    {
        $value = $this->getPayment();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `payment` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasPayment(): bool
    {
        return $this->payment !== null;
    }

    /**
     * @param array|null $raw
     *
     * @return $this
     */
    public function setRaw(?array $raw = null)
    {
        $this->raw = $raw;
        $this->_touchedFields[static::FIELD_RAW] = true;

        return $this;
    }

    /**
     * @param array $raw
     *
     * @return $this
     */
    public function setRawOrFail(array $raw)
    {
        $this->raw = $raw;
        $this->_touchedFields[static::FIELD_RAW] = true;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRaw(): ?array
    {
        return $this->raw;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return array
     */
    public function getRawOrFail(): array
    {
        $value = $this->getRaw();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `raw` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasRaw(): bool
    {
        return $this->raw !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{orderId: string|null, referenceId: string|null, paymentUrl: string|null, amount: int|float|null, fee: int|float|null, status: \Paykit\Enums\PaymentStatus|null, payment: array{qris: array{url: string|null, string: string|null}|null, virtualAccount: array{name: string|null, number: string|null}|null}|null, raw: array<int, mixed>|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{orderId: string|null, referenceId: string|null, paymentUrl: string|null, amount: int|float|null, fee: int|float|null, status: \Paykit\Enums\PaymentStatus|null, payment: array{qris: array{url: string|null, string: string|null}|null, virtualAccount: array{name: string|null, number: string|null}|null}|null, raw: array<int, mixed>|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{orderId: string|null, referenceId: string|null, paymentUrl: string|null, amount: int|float|null, fee: int|float|null, status: \Paykit\Enums\PaymentStatus|null, payment: array{qris: array{url: string|null, string: string|null}|null, virtualAccount: array{name: string|null, number: string|null}|null}|null, raw: array<int, mixed>|null} $data
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
