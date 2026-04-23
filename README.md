# Paykit PHP

Paykit is a modular payment gateway abstraction library for PHP. It provides a consistent interface to interact with multiple payment providers while keeping vendor-specific behavior isolated in dedicated drivers.

## Installation

```shell
composer require paykit-php/paykit
composer require paykit-php/duitku
```

## Basic Usage

```php
use Paykit\Paykit;
use Paykit\Duitku\DuitkuGateway;

$paykit = new Paykit();

$paykit->register('duitku', function () {
    return new DuitkuGateway([
        'merchant_code' => 'your_merchant_code',
        'api_key' => 'your_api_key',
        'environment' => 'sandbox',
    ]);
});

$gateway = $paykit->driver('duitku');
```

## Get Payment Methods

```php
$methods = $gateway->getMethods(10000);

foreach ($methods->getItems() as $method) {
    echo $method->getCode();
    echo $method->getName();
}
```

## Create Payment

```php
use Paykit\DTO\CreatePaymentDto;
use Paykit\DTO\CustomerDto;
use Paykit\DTO\UrlDto;

$payment = $gateway->createPayment(
    new CreatePaymentDto(
        method: 'VC',
        amount: 10000,
        orderId: 'INV-001',
        customer: new CustomerDto(
            email: 'john@example.com',
            firstName: 'John'
        ),
        url: new UrlDto(
            callbackUrl: 'https://your-app.test/callback',
            successUrl: 'https://your-app.test/success',
            failedUrl: 'https://your-app.test/failed'
        )
    )
);
```

## Inquiry Payment

```php
$payment = $gateway->inquiry('INV-001');

echo $payment->getStatus()->value;
```

## Redirect Handling

Some providers return users via redirect (success or failed URL).

```php
use Paykit\Contracts\Capabilities\SupportsRedirect;

if ($gateway instanceof SupportsRedirect) {
    $payment = $gateway->handleRedirect($_GET);
}
```

## Callback Handling (Webhook)

```php
use Paykit\Contracts\Capabilities\SupportsWebhook;

$payload = json_decode(file_get_contents('php://input'), true);

if ($gateway instanceof SupportsWebhook) {
    $payment = $gateway->handleCallback($payload);
}
```

## Payment Data

```php
$payment->getOrderId();
$payment->getReferenceId();
$payment->getPaymentUrl();
$payment->getAmount();
$payment->getFee();
$payment->getStatus();

$details = $payment->getPayment();

$details?->getQris()?->getUrl();
$details?->getVirtualAccount()?->getNumber();
```

## Notes

* Payment method codes must be used exactly as provided by each vendor.
* No normalization is applied to method codes.
* Only payment flow and status are standardized.
* Raw vendor response is always available via `$payment->getRaw()`.

## License

MIT
