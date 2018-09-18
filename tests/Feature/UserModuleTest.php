<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    function it_displays_a_404_error_if_user_no_found(){
      $this->get('/users/999')
      ->assertStatus(404)
      ->assertSee('Usuario no encontrado');
    }
}
