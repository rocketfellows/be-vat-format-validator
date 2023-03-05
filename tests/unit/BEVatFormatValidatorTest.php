<?php

namespace rocketfellows\BEVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\BEVatFormatValidator\BEVatFormatValidator;

class BEVatFormatValidatorTest extends TestCase
{
    /**
     * @var BEVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new BEVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'BE0123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BE0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BE0111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BE0999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BE01234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BE012345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Be0123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'bE0123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'be0123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '012345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '01234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE0123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
