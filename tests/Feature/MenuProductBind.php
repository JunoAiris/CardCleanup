<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuProductBind extends TestCase
{
    protected function setUp():void {

      parent::setUp();
      $this->post('/register', [
        'name' => 'Anne',
        'email' => 'AlephJuno@proton.me',
        'password' => 'FalseDream',
        'password_confirmation' => 'FalseDream',
        'company_name' => 'Lies LLC',
        'trading_name' => 'Truth LLC',
        'address' => 'Luna',
        'phone' => '999999999',
        'cnpj' => '888888888888',
        'type' => 'Manager',
      ]);

      $user = User::where('email', 'AlephJuno@proton.me')->first();
      $this->actingAs($user);
    }

    public function test_page_exists()
    {
        $response = $this->get('/cardapios/10');

        $response->assertStatus(200);
    }
}
