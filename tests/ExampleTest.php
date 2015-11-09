<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class ExampleTest
 */
class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    /**
     * A function that test if the login page works.
     *
     * @return void
     */
    public function testLoginPage()
    {
        $this->visit(route('auth.login'))
            ->see('Login');
    }

    /**
     *  Test if a unregistred user try to acces into a resource
     *
     * @return void
     */
    public function testUserWithoutAccesToLogin()
    {
        $this->unlogged();
        $this->visit('/resource')
            ->seePageIs(route('auth.login'))
            ->see ('Login')
            ->dontSee('Logout');
    }

    /**
     *  Test if a registred user try to acces into a resource.
     *
     *
     * @return void
     */
    public function testUserWithAccesToLogin()
    {
        $this->visit('/resource');
    }

    private function logged()
    {
        Session::set('authentificated', true);
    }

    private function unlogged()
    {
        Session::set('authenticated',false);
    }

    private function testLoginPageHaveRegisterLink()
    {
        $this->visit('/login')
            ->click ('Register')
            ->seePageIs('/register');

    }

    private function testPostLoginOk()
    {
        $this->visit('/login')
            ->type('sylvershine@gmail.com','email')
            ->type('123456','password')
            ->check('remember')
            ->click ('Register')
            ->seePageIs('/register');

    }

}
