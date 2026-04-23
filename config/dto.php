<?php

declare(strict_types=1);

use Paykit\Enums\PaymentStatus;
use PhpCollective\Dto\Config\Dto;
use PhpCollective\Dto\Config\Field;
use PhpCollective\Dto\Config\Schema;

return Schema::create()
    ->dto(
        Dto::create('Balance')
            ->fields(
                Field::string('currency'),
                Field::union('balance', 'int', 'float')->required(),
            ),
    )
    ->dto(
        Dto::create('Fee')
            ->fields(
                Field::int('flat'),
                Field::float('percent'),
            ),
    )
    ->dto(
        Dto::create('Amount')
            ->fields(
                Field::union('minimum', 'int', 'float'),
                Field::union('maximum', 'int', 'float'),
            ),
    )
    ->dto(
        Dto::create('Method')
            ->fields(
                Field::string('code')->required(),
                Field::string('name')->required(),
                Field::string('imageUrl'),
                Field::dto('fee', 'Fee'),
                Field::dto('amount', 'Amount'),
            )
    )
    ->dto(
        Dto::create('Methods')
            ->fields(
                Field::collection('items', 'Method')->required(),
            ),
    )
    ->dto(
        Dto::create('Customer')
            ->fields(
                Field::string('email')->required(),
                Field::string('firstName'),
                Field::string('lastName'),
                Field::string('phoneNumber'),
            ),
    )
    ->dto(
        Dto::create('Url')
            ->fields(
                Field::string('callbackUrl'),
                Field::string('successUrl'),
                Field::string('failedUrl'),
            )
    )
    ->dto(
        Dto::create('CreatePayment')
            ->fields(
                Field::string('method')->required(),
                Field::union('amount', 'int', 'float')->required(),
                Field::string('orderId')->required(),
                Field::string('channel'),
                Field::dto('customer', 'Customer')->required(),
                Field::dto('url', 'Url')->required(),
            ),
    )

    ->dto(
        Dto::create('PaymentQris')
            ->fields(
                Field::string('url'),
                Field::string('string'),
            ),
    )
    ->dto(
        Dto::create('PaymentVirtualAccount')
            ->fields(
                Field::string('name'),
                Field::string('number'),
            ),
    )
    ->dto(
        Dto::create('PaymentDetails')
            ->fields(
                Field::dto('qris', 'PaymentQris'),
                Field::dto('virtualAccount', 'PaymentVirtualAccount'),
            ),
    )
    ->dto(
        Dto::create('Payment')
            ->fields(
                Field::string('orderId'),
                Field::string('referenceId'),
                Field::string('paymentUrl'),
                Field::union('amount', 'int', 'float'),
                Field::union('fee', 'int', 'float'),
                Field::enum('status', PaymentStatus::class),
                Field::dto('payment', 'PaymentDetails'),
                Field::array('raw'),
            ),
    )
    ->toArray()
;
