<?php

namespace Tests\Feature\Http\Controllers\Auth;

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Test for Login Controller
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class LoginControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function login()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
    }
}
