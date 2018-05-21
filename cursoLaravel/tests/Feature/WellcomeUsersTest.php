<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/pablo/Pa')
            ->assertStatus(200)
            ->assertSee('Bienvenido Pablo, tu apodo es Pa');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/pablo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Pablo');
    }
}