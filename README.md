# Belgium vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Belgium vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/be-vat-format-validator
```

## Usage example

Valid Belgium vat number:

```php
$validator = new BEVatFormatValidator();
$validator->isValid('BE0123456789');
$validator->isValid('0123456789');
```

Returns:

```shell
true
true
```

Invalid Belgium vat number:

```php
$validator = new BEVatFormatValidator();
$validator->isValid('BE01234567890');
$validator->isValid('BE012345678');
$validator->isValid('BE123456789');
$validator->isValid('012345678');
$validator->isValid('01234567890');
$validator->isValid('123456789');
$validator->isValid('DE0123456789');
```

```shell
false
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
