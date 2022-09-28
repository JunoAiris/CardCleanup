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

    public function test_page_exists(){
      $response = $this->get('/produtos');

      $response->assertStatus(200);
    }

    public function test_data_register_successful_plus_redirect(){
      $response = $this->post('/produtos', [
        'name' => 'TempTest',
        'description' => 'TempTest',
        'price' => '00101010',
        'is_available' => '1',
      ]);

      $response->assertRedirect()
       ->assertSessionHasNoErrors();

      $this->assertDatabaseHas('products', [
        'name' => 'TempTest',
        'description' => 'TempTest',
      ]);
    }

    public function test_data_register_halt_on_invalid_data(){
      $response =$this->post('/produtos', [
        'name' => 'TempTest',
        'description' => 'TempTest',
        'price' => 'TempTest',
        'is_available' => '0',
      ]);

      $response->assertRedirect()->assertInvalid(['price']);
    }
}
