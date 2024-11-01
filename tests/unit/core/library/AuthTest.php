<?php

use core\library\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function test_method_attempt_return_true()
    {
        $auth = new Auth;
        $attempt = $auth->attempt();
        $this->assertTrue($attempt);
    }
}
