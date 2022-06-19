<?php
namespace tests\Feature\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class LoginController for test.
 * @author Álvaro Ramas Franco.
 * @since 1.0.
 */
class LoginControllerTest extends TestCase
{
    /** @test */
    public function login()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }


    /** @test */
    public function index()
    {
        $response = $this->get(route('login'));
    
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');

    }
}
