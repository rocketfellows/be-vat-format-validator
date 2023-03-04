<?php

namespace rocketfellows\BEVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

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
                'vatNumber',
                'isValid',
            ],
        ];
    }
}
