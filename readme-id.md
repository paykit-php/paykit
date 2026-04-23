# Paykit PHP

Paykit adalah library abstraksi payment gateway untuk PHP yang modular. Library ini menyediakan interface yang konsisten untuk berbagai provider pembayaran, sementara perbedaan antar vendor ditangani di masing-masing driver.

## Instalasi

```shell
composer require paykit-php/paykit
composer require paykit-php/duitku
```

## Penggunaan Dasar

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

## Mendapatkan Metode Pembayaran

```php
$methods = $gateway->getMethods(10000);

foreach ($methods->getItems() as $method) {
    echo $method->getCode();
    echo $method->getName();
}
```

## Membuat Pembayaran

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

## Inquiry Pembayaran

```php
$payment = $gateway->inquiry('INV-001');

echo $payment->getStatus()->value;
```

## Handling Redirect

```php
use Paykit\Contracts\Capabilities\SupportsRedirect;

if ($gateway instanceof SupportsRedirect) {
    $payment = $gateway->handleRedirect($_GET);
}
```

## Handling Callback (Webhook)

```php
use Paykit\Contracts\Capabilities\SupportsWebhook;

$payload = json_decode(file_get_contents('php://input'), true);

if ($gateway instanceof SupportsWebhook) {
    $payment = $gateway->handleCallback($payload);
}
```

## Data Pembayaran

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

## Catatan

* Kode metode pembayaran tidak dinormalisasi dan harus mengikuti vendor.
* Mapping hanya dilakukan pada status pembayaran.
* Struktur DTO diseragamkan, tetapi data tetap berasal dari vendor.
* Response asli vendor tersedia di `$payment->getRaw()`.

## Lisensi

MIT
