<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    // public function test_login_user_success(){
    //     $this->seed();

    //     $response = $this->post('/login',
    //     ['email'=> 'superadmin@gmail.com',
    //     'password'=>'password',]);
    //     $response -> assertRediract('/dashbord');
    // }
    public function test_example()
    {
        //buka halaman login
        $response = $this->get('/');
        //pastikan halaman login bisa dibukak
        $response->assertStatus(200);
        //ada tulisan login
        $response->assertSeeText("Login");
        //ada tulisan email
        $response->assertSeeText("Email");
        //ada tulisan password
        $response->assertSeeText("Password");
    }



}
