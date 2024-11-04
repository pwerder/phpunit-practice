<?php

namespace Tests\Unit\Core\Library;

use core\library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateTest extends TestCase
{
    public function test_required_validate()
    {
        // Arrange
        $validate = new Validate;

        // Act
        $validated = $validate->required();

        // Assert
        $this->assertTrue($validated, 'The required method should return true');
    }

    public function test_array_has_key()
    {
        // Arrange
        $array = ['key' => 'value'];
        // Act
        $keyExists = array_key_exists('key', $array);
        // Assert
        $this->assertArrayHasKey('key', $array, 'The array should have the key "key"');
    }

    public function test_same_string()
    {
        // Arrange
        $str1 = 'Test';
        $str2 = 'Test';

        // Assert
        $this->assertSame($str1, $str2, 'The strings should be identical');
    }
}
