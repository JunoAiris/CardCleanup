<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class ProductTest extends TestCase
{
    protected function setUp():void {
      parent::setUp();

      $this->post('/register', [
        'name' => 'Anne',
        'email' => 'AlephJuno@proton.me',
        'password' => 'FalseDream',
        'password_confirmation' => 'FalseDream',
        'type' => 'Manager',
        'company_name' => 'Lies LLC',
        'trading_name' => 'Truth LLC',
        'address' => 'Luna',
        'phone' => '999999999',
        'cnpj' => '888888888888'
      ]);

      $user = User::where('email', 'AlephJuno@proton.me')->first();
      $this->actingAs($user);
    }

    public function page_can_be_reached(){
        $response = $this->get('/produtos');

        $response->assertStatus(200);
    }

    public function page_lists_data(){

    }

    public function pushes_valid_data_to_db(){

    }

    public function pushes_invalid_data_to_db(){

    }
}
