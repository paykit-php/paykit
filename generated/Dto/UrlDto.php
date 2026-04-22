<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * Url DTO
 *
 * @property string|null $callbackUrl
 * @property string|null $successUrl
 * @property string|null $failedUrl
 */
class UrlDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_CALLBACK_URL = 'callbackUrl';

    /**
     * @var string
     */
    public const FIELD_SUCCESS_URL = 'successUrl';

    /**
     * @var string
     */
    public const FIELD_FAILED_URL = 'failedUrl';

    /**
     * @var string|null
     */
    protected ?string $callbackUrl = null;

    /**
     * @var string|null
     */
    protected ?string $successUrl = null;

    /**
     * @var string|null
     */
    protected ?string $failedUrl = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'callbackUrl' => [
            'type' => 'string',
            'name' => 'callbackUrl',
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
        'successUrl' => [
            'type' => 'string',
            'name' => 'successUrl',
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
        'failedUrl' => [
            'type' => 'string',
            'name' => 'failedUrl',
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
            'callback_url' => 'callbackUrl',
            'success_url' => 'successUrl',
            'failed_url' => 'failedUrl',
        ],
        'dashed' => [
            'callback-url' => 'callbackUrl',
            'success-url' => 'successUrl',
            'failed-url' => 'failedUrl',
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
        if (isset($data['callbackUrl'])) {
            /** @var string|null $value */
            $value = $data['callbackUrl'];
            $this->callbackUrl = $value;
            $this->_touchedFields['callbackUrl'] = true;
        }
        if (isset($data['successUrl'])) {
            /** @var string|null $value */
            $value = $data['successUrl'];
            $this->successUrl = $value;
            $this->_touchedFields['successUrl'] = true;
        }
        if (isset($data['failedUrl'])) {
            /** @var string|null $value */
            $value = $data['failedUrl'];
            $this->failedUrl = $value;
            $this->_touchedFields['failedUrl'] = true;
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
            'callbackUrl' => $this->callbackUrl,
            'successUrl' => $this->successUrl,
            'failedUrl' => $this->failedUrl,
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
     * @param string|null $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl(?string $callbackUrl = null)
    {
        $this->callbackUrl = $callbackUrl;
        $this->_touchedFields[static::FIELD_CALLBACK_URL] = true;

        return $this;
    }

    /**
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrlOrFail(string $callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        $this->_touchedFields[static::FIELD_CALLBACK_URL] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getCallbackUrlOrFail(): string
    {
        $value = $this->getCallbackUrl();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `callbackUrl` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasCallbackUrl(): bool
    {
        return $this->callbackUrl !== null;
    }

    /**
     * @param string|null $successUrl
     *
     * @return $this
     */
    public function setSuccessUrl(?string $successUrl = null)
    {
        $this->successUrl = $successUrl;
        $this->_touchedFields[static::FIELD_SUCCESS_URL] = true;

        return $this;
    }

    /**
     * @param string $successUrl
     *
     * @return $this
     */
    public function setSuccessUrlOrFail(string $successUrl)
    {
        $this->successUrl = $successUrl;
        $this->_touchedFields[static::FIELD_SUCCESS_URL] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSuccessUrl(): ?string
    {
        return $this->successUrl;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getSuccessUrlOrFail(): string
    {
        $value = $this->getSuccessUrl();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `successUrl` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasSuccessUrl(): bool
    {
        return $this->successUrl !== null;
    }

    /**
     * @param string|null $failedUrl
     *
     * @return $this
     */
    public function setFailedUrl(?string $failedUrl = null)
    {
        $this->failedUrl = $failedUrl;
        $this->_touchedFields[static::FIELD_FAILED_URL] = true;

        return $this;
    }

    /**
     * @param string $failedUrl
     *
     * @return $this
     */
    public function setFailedUrlOrFail(string $failedUrl)
    {
        $this->failedUrl = $failedUrl;
        $this->_touchedFields[static::FIELD_FAILED_URL] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFailedUrl(): ?string
    {
        return $this->failedUrl;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getFailedUrlOrFail(): string
    {
        $value = $this->getFailedUrl();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `failedUrl` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasFailedUrl(): bool
    {
        return $this->failedUrl !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{callbackUrl: string|null, successUrl: string|null, failedUrl: string|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{callbackUrl: string|null, successUrl: string|null, failedUrl: string|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{callbackUrl: string|null, successUrl: string|null, failedUrl: string|null} $data
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
