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
 * Customer DTO
 *
 * @property string $email
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $phoneNumber
 */
class CustomerDto extends AbstractDto
{
    /**
     * @var string
     */
    public const FIELD_EMAIL = 'email';

    /**
     * @var string
     */
    public const FIELD_FIRST_NAME = 'firstName';

    /**
     * @var string
     */
    public const FIELD_LAST_NAME = 'lastName';

    /**
     * @var string
     */
    public const FIELD_PHONE_NUMBER = 'phoneNumber';

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string|null
     */
    protected ?string $firstName = null;

    /**
     * @var string|null
     */
    protected ?string $lastName = null;

    /**
     * @var string|null
     */
    protected ?string $phoneNumber = null;

    /**
     * Some data is only for debugging for now.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $_metadata = [
        'email' => [
            'type' => 'string',
            'required' => true,
            'name' => 'email',
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
        'firstName' => [
            'type' => 'string',
            'name' => 'firstName',
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
        'lastName' => [
            'type' => 'string',
            'name' => 'lastName',
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
        'phoneNumber' => [
            'type' => 'string',
            'name' => 'phoneNumber',
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
            'email' => 'email',
            'first_name' => 'firstName',
            'last_name' => 'lastName',
            'phone_number' => 'phoneNumber',
        ],
        'dashed' => [
            'email' => 'email',
            'first-name' => 'firstName',
            'last-name' => 'lastName',
            'phone-number' => 'phoneNumber',
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
        if (isset($data['email'])) {
            /** @var string $value */
            $value = $data['email'];
            $this->email = $value;
            $this->_touchedFields['email'] = true;
        }
        if (isset($data['firstName'])) {
            /** @var string|null $value */
            $value = $data['firstName'];
            $this->firstName = $value;
            $this->_touchedFields['firstName'] = true;
        }
        if (isset($data['lastName'])) {
            /** @var string|null $value */
            $value = $data['lastName'];
            $this->lastName = $value;
            $this->_touchedFields['lastName'] = true;
        }
        if (isset($data['phoneNumber'])) {
            /** @var string|null $value */
            $value = $data['phoneNumber'];
            $this->phoneNumber = $value;
            $this->_touchedFields['phoneNumber'] = true;
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
            'email' => $this->email,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'phoneNumber' => $this->phoneNumber,
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
        if (!isset($this->email)) {
            $errors = [];
            if (!isset($this->email)) {
                $errors[] = 'email';
            }
            if ($errors) {
                throw new InvalidArgumentException('Required fields missing: ' . implode(', ', $errors));
            }
        }
    }
    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
        $this->_touchedFields[static::FIELD_EMAIL] = true;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function hasEmail(): bool
    {
        return isset($this->email);
    }

    /**
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName(?string $firstName = null)
    {
        $this->firstName = $firstName;
        $this->_touchedFields[static::FIELD_FIRST_NAME] = true;

        return $this;
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstNameOrFail(string $firstName)
    {
        $this->firstName = $firstName;
        $this->_touchedFields[static::FIELD_FIRST_NAME] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getFirstNameOrFail(): string
    {
        $value = $this->getFirstName();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `firstName` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasFirstName(): bool
    {
        return $this->firstName !== null;
    }

    /**
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName(?string $lastName = null)
    {
        $this->lastName = $lastName;
        $this->_touchedFields[static::FIELD_LAST_NAME] = true;

        return $this;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastNameOrFail(string $lastName)
    {
        $this->lastName = $lastName;
        $this->_touchedFields[static::FIELD_LAST_NAME] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getLastNameOrFail(): string
    {
        $value = $this->getLastName();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `lastName` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasLastName(): bool
    {
        return $this->lastName !== null;
    }

    /**
     * @param string|null $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber(?string $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;
        $this->_touchedFields[static::FIELD_PHONE_NUMBER] = true;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumberOrFail(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        $this->_touchedFields[static::FIELD_PHONE_NUMBER] = true;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @throws \RuntimeException If value is not set.
     *
     * @return string
     */
    public function getPhoneNumberOrFail(): string
    {
        $value = $this->getPhoneNumber();
        if ($value === null) {
            throw new RuntimeException('Value not set for field `phoneNumber` (expected to be not null)');
        }

        return $value;
    }

    /**
     * @return bool
     */
    public function hasPhoneNumber(): bool
    {
        return $this->phoneNumber !== null;
    }

    /**
     * @param string|null $type
     * @param array<string>|null $fields
     * @param bool $touched
     *
     * @return array{email: string, firstName: string|null, lastName: string|null, phoneNumber: string|null}
     */
    public function toArray(?string $type = null, ?array $fields = null, bool $touched = false): array
    {
        /** @var array{email: string, firstName: string|null, lastName: string|null, phoneNumber: string|null} $result */
        $result = $this->_toArrayInternal($type, $fields, $touched);

        return $result;
    }

    /**
     * @param array{email: string, firstName: string|null, lastName: string|null, phoneNumber: string|null} $data
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
