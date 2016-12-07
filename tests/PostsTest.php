<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostsTest extends TestCase
{
    public function testAuthPage() {
        $this->visit('/admin')
            ->see('Login')
            ->dontSee('Logout');
    }

    public function testPublicPage() {
        $this->visit('/')
            ->see('Test Blog')
            ->see('Login')
            ->see('Register')
            ->dontSee('Create a post')
            ->dontSee('Logout');
    }

    public function testShouldReturnNotFound() {
        $response = $this->call('GET', '/posts/not%20a%20valid%20id');
        $this->assertEquals(404, $response->status());
    }
}
