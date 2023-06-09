## ValidateCreditCardType PHP Class

The `ValidateCreditCardType` PHP class is designed to validate and determine the type of a credit card based on the provided credit card number.

### Usage

To use the `ValidateCreditCardType` class, follow these steps:

1. Include the class file in your PHP script.

```php
require_once 'ValidateCreditCardType.php';
```

2. Create an instance of the `ValidateCreditCardType` class.

```php
$checkit = new ValidateCreditCardType();
```

3. Call the `GetType` method and pass the credit card number as a parameter.

```php
$type = $checkit->GetType($creditCardNumber);
```

4. The `GetType` method will return the type of the credit card, or `FALSE` if the card type cannot be determined.

```php
echo 'Card type: '.$type;
```

### Class Details

#### Class: ValidateCreditCardType

This class is responsible for validating and determining the type of a credit card.

##### Properties

- `public $credit_card_number`: Holds the credit card number.
- `public $length`: Holds the length of the credit card number.
- `public $type`: Holds the determined credit card type.

##### Trait: DefinedTypes

The `DefinedTypes` trait provides predefined credit card types as properties.

- `$disc`: Discover
- `$amex`: American Express
- `$visa`: Visa
- `$mc`: Master Card
- `$diners`: Diners Club

### Method Details

#### Method: GetType

This method is used to determine the type of the credit card based on the provided credit card number.

##### Parameters

- `$cc`: The credit card number to be validated.

##### Return Value

- If the credit card type is determined, the method returns the corresponding card type as a string.
- If the credit card type cannot be determined, the method returns `FALSE`.

#### Example Usage

```php
$type = $checkit->GetType($creditCardNumber);
```

### Test Cases

You can test the class using the provided test cases. Simply change the value of the variables `$amx`, `$vis`, `$vis13`, `$mc`, `$dc`, or `$disc` to see the comparison of different card types.

```php
$amx    = '345810334649684';
$vis    = '4485872411708231';
$vis13  = '4539631506535';
$mc     = '5212839188252484';
$dc     = '36936402726148';
$disc   = '6011340823715366';

$checkit = new ValidateCreditCardType();
$type = $checkit->GetType($dc);
echo 'Card type: '.$type;
```

Please note that this class only provides validation and determination of credit card types. It does not perform any actual credit card processing or authorization.
