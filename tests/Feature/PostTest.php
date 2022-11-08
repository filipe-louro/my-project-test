<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_any_user_can_see_post_in_home()
    {
        $response = $this->get('/',[
            'title' => 'Publicação de Teste',
            'description' => 'Descrição de teste.'
        ]);

        $response->assertStatus(200);
    }
}
