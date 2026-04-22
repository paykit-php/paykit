<?php

/**
 * !!! Auto generated file. Do not directly modify this file. !!!
 * You can either version control this or generate the file on the fly prior to usage/deployment.
 */

namespace Paykit\Dto;

use PhpCollective\Dto\Dto\AbstractDto;
use RuntimeException;

/**
 * PaymentQris DTO
 *
 * @property string|null $url
 * @property string|null $string
 */
class PaymentQrisDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_URL = 'url';

    /**
     * @var string
     */
    public const FIELD_STRING = 'string';

    /**
     * @var string|null
     */
    protected ?string $url = null;

    /**
     * @var string|null
     */
    protected ?string $string = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'url' => [
            'type' => 'string',
            'name' => 'url',
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
        'string' => [
            'type' => 'string',
            'name' => 'string',
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
            'url' => 'url',
            'string' => 'string',
        ],
        'dashed' => [
            'url' => 'url',
            'string' => 'string',
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
        if (isset($data['url'])) {
            /** @var string|null $value */
            $value = $data['url'];
            $this->url = $value;
            $this->_touchedFields['url'] = true;
        }
        if (isset($data['string'])) {
            /** @var string|null $value */
            $value = $data['string'];
            $this->string = $value;
            $this->_touchedFields['string'] = true;
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
            'url' => $this->url,
            'string' => $this->string,
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
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl(?string $url = null)
    {
        $this->url = $url;
        $this->_touchedFields[static::FIELD_URL] = true;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrlOrFail(string $url)
    {
        $this->url = $url;
        $this->_touchedFields[static::FIELD_URL] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getUrlOrFail(): string
    {
        $value = $this->getUrl();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `url` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasUrl(): bool
    {
        return $this->url !== null;
    }

    /**
     * @param string|null $string
     *
     * @return $this
     */
    public function setString(?string $string = null)
    {
        $this->string = $string;
        $this->_touchedFields[static::FIELD_STRING] = true;

        return $this;
    }

    /**
     * @param string $string
     *
     * @return $this
     */
    public function setStringOrFail(string $string)
    {
        $this->string = $string;
        $this->_touchedFields[static::FIELD_STRING] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getString(): ?string
    {
        return $this->string;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getStringOrFail(): string
    {
        $value = $this->getString();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `string` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasString(): bool
    {
        return $this->string !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{url: string|null, string: string|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{url: string|null, string: string|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{url: string|null, string: string|null} $data
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
