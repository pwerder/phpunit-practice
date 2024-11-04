<?php

namespace Tests\Unit\Core\Library;

use core\library\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function test_attempt_auth()
    {
        // Arrange
        $auth = new Auth;
        
        // Act
        $attempt = $auth->attempt();
        
        // Assert  
        $this->assertTrue($attempt);
        $this->assertEquals('Teste', 'Teste');
    }
}
