<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Order;


class OrderTest extends TestCase
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
    $response = $this->get('/pedidos');

    $response->assertStatus(200);
  }

  public function test_data_register_successful_plus_redirect(){
    $response = $this->post('/pedidos', [
      'table_number' => '1',
      'status' => 'Em Progresso',
      'total_value' => '4242',
    ]);

    $response->assertRedirect()
     ->assertSessionHasNoErrors();

    $this->assertDatabaseHas('orders', [
      'table_number' => '1',
      'status' => 'Em Progresso',
      'total_value' => '4242',
    ]);
  }

  public function test_data_register_halt_on_invalid_data(){
    $response =$this->post('/pedidos', [
      'table_number' => 'NAN',
      'status' => 'Em Progresso',
      'total_value' => '4242',
    ]);

    $response->assertRedirect()->assertInvalid(['table_number']);
  }}
