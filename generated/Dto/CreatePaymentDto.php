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
 * CreatePayment DTO
 *
 * @property string $method
 * @property int|float $amount
 * @property string $orderId
 * @property string|null $channel
 * @property \Paykit\Dto\CustomerDto $customer
 * @property \Paykit\Dto\UrlDto $url
 */
class CreatePaymentDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_METHOD = 'method';

    /**
     * @var string
     */
    public const FIELD_AMOUNT = 'amount';

    /**
     * @var string
     */
    public const FIELD_ORDER_ID = 'orderId';

    /**
     * @var string
     */
    public const FIELD_CHANNEL = 'channel';

    /**
     * @var string
     */
    public const FIELD_CUSTOMER = 'customer';

    /**
     * @var string
     */
    public const FIELD_URL = 'url';

    /**
     * @var string
     */
    protected string $method;

    /**
     * @var int|float
     */
    protected int|float $amount;

    /**
     * @var string
     */
    protected string $orderId;

    /**
     * @var string|null
     */
    protected ?string $channel = null;

    /**
     * @var \Paykit\Dto\CustomerDto
     */
    protected \Paykit\Dto\CustomerDto $customer;

    /**
     * @var \Paykit\Dto\UrlDto
     */
    protected \Paykit\Dto\UrlDto $url;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'method' => [
            'type' => 'string',
            'required' => true,
            'name' => 'method',
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
            'required' => true,
            'name' => 'amount',
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
        'orderId' => [
            'type' => 'string',
            'required' => true,
            'name' => 'orderId',
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
        'channel' => [
            'type' => 'string',
            'name' => 'channel',
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
        'customer' => [
            'type' => '\Paykit\Dto\CustomerDto',
            'required' => true,
            'name' => 'customer',
            'defaultValue' => null,
            'dto' => 'Customer',
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
        'url' => [
            'type' => '\Paykit\Dto\UrlDto',
            'required' => true,
            'name' => 'url',
            'defaultValue' => null,
            'dto' => 'Url',
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
            'method' => 'method',
            'amount' => 'amount',
            'order_id' => 'orderId',
            'channel' => 'channel',
            'customer' => 'customer',
            'url' => 'url',
        ],
        'dashed' => [
            'method' => 'method',
            'amount' => 'amount',
            'order-id' => 'orderId',
            'channel' => 'channel',
            'customer' => 'customer',
            'url' => 'url',
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
        if (isset($data['method'])) {
            /** @var string $value */
            $value = $data['method'];
            $this->method = $value;
            $this->_touchedFields['method'] = true;
        }
        if (isset($data['amount'])) {
            /** @var int|float $value */
            $value = $data['amount'];
            $this->amount = $value;
            $this->_touchedFields['amount'] = true;
        }
        if (isset($data['orderId'])) {
            /** @var string $value */
            $value = $data['orderId'];
            $this->orderId = $value;
            $this->_touchedFields['orderId'] = true;
        }
        if (isset($data['channel'])) {
            /** @var string|null $value */
            $value = $data['channel'];
            $this->channel = $value;
            $this->_touchedFields['channel'] = true;
        }
        if (isset($data['customer'])) {
            $value = $data['customer'];
            if (is_array($value)) {
                $value = new \Paykit\Dto\CustomerDto($value);
            }
            /** @var \Paykit\Dto\CustomerDto $value */
            $this->customer = $value;
            $this->_touchedFields['customer'] = true;
        }
        if (isset($data['url'])) {
            $value = $data['url'];
            if (is_array($value)) {
                $value = new \Paykit\Dto\UrlDto($value);
            }
            /** @var \Paykit\Dto\UrlDto $value */
            $this->url = $value;
            $this->_touchedFields['url'] = true;
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
            'method' => $this->method,
            'amount' => $this->amount,
            'orderId' => $this->orderId,
            'channel' => $this->channel,
            'customer' => $this->customer->toArray(),
            'url' => $this->url->toArray(),
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
        if (!isset($this->method) || !isset($this->amount) || !isset($this->orderId) || !isset($this->customer) || !isset($this->url)) {
            $errors = [];
            if (!isset($this->method)) {
                $errors[] = 'method';
            }
            if (!isset($this->amount)) {
                $errors[] = 'amount';
            }
            if (!isset($this->orderId)) {
                $errors[] = 'orderId';
            }
            if (!isset($this->customer)) {
                $errors[] = 'customer';
            }
            if (!isset($this->url)) {
                $errors[] = 'url';
            }
            if ($errors) {
                throw new InvalidArgumentException('Required fields missing: ' . implode(', ', $errors));
            }
        }
    }
    /**
     * @param string $method
     *
     * @return $this
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
        $this->_touchedFields[static::FIELD_METHOD] = true;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return bool
     */
    public function hasMethod(): bool
    {
        return isset($this->method);
    }

    /**
     * @param int|float $amount
     *
     * @return $this
     */
    public function setAmount(int|float $amount)
    {
        $this->amount = $amount;
        $this->_touchedFields[static::FIELD_AMOUNT] = true;

        return $this;
    }

    /**
     * @return int|float
     */
    public function getAmount(): int|float
    {
        return $this->amount;
    }

    /**
     * @return bool
     */
    public function hasAmount(): bool
    {
        return isset($this->amount);
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId(string $orderId)
    {
        $this->orderId = $orderId;
        $this->_touchedFields[static::FIELD_ORDER_ID] = true;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return bool
     */
    public function hasOrderId(): bool
    {
        return isset($this->orderId);
    }

    /**
     * @param string|null $channel
     *
     * @return $this
     */
    public function setChannel(?string $channel = null)
    {
        $this->channel = $channel;
        $this->_touchedFields[static::FIELD_CHANNEL] = true;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setChannelOrFail(string $channel)
    {
        $this->channel = $channel;
        $this->_touchedFields[static::FIELD_CHANNEL] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getChannelOrFail(): string
    {
        $value = $this->getChannel();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `channel` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasChannel(): bool
    {
        return $this->channel !== null;
    }

    /**
     * @param \Paykit\Dto\CustomerDto $customer
     *
     * @return $this
     */
    public function setCustomer(\Paykit\Dto\CustomerDto $customer)
    {
        $this->customer = $customer;
        $this->_touchedFields[static::FIELD_CUSTOMER] = true;

        return $this;
    }

    /**
     * @return \Paykit\Dto\CustomerDto
     */
    public function getCustomer(): \Paykit\Dto\CustomerDto
    {
        return $this->customer;
    }

    /**
     * @return bool
     */
    public function hasCustomer(): bool
    {
        return isset($this->customer);
    }

    /**
     * @param \Paykit\Dto\UrlDto $url
     *
     * @return $this
     */
    public function setUrl(\Paykit\Dto\UrlDto $url)
    {
        $this->url = $url;
        $this->_touchedFields[static::FIELD_URL] = true;

        return $this;
    }

    /**
     * @return \Paykit\Dto\UrlDto
     */
    public function getUrl(): \Paykit\Dto\UrlDto
    {
        return $this->url;
    }

    /**
     * @return bool
     */
    public function hasUrl(): bool
    {
        return isset($this->url);
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{method: string, amount: int|float, orderId: string, channel: string|null, customer: array{email: string, firstName: string|null, lastName: string|null, phoneNumber: string|null}, url: array{callbackUrl: string|null, successUrl: string|null, failedUrl: string|null}}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{method: string, amount: int|float, orderId: string, channel: string|null, customer: array{email: string, firstName: string|null, lastName: string|null, phoneNumber: string|null}, url: array{callbackUrl: string|null, successUrl: string|null, failedUrl: string|null}} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{method: string, amount: int|float, orderId: string, channel: string|null, customer: array{email: string, firstName: string|null, lastName: string|null, phoneNumber: string|null}, url: array{callbackUrl: string|null, successUrl: string|null, failedUrl: string|null}} $data
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
