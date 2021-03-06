<?php

namespace App\Test;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-07-28 at 22:28:50.
 */
class UserTest extends TestCase
{

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * Test save user
     */
    public function testSaveUser()
    {
        // GIVEN
        $mock = $this->getMockBuilder('App\User')
                ->disableOriginalConstructor()
                ->setMethods(['save', 'log', 'createObject'])
                ->getMock();

        // method createObject
        $mock->method('createObject')
                ->will($this->returnValue(new \DateTime("2016-07-29 00:00:00")));

        // method save
        $mock->method('save')
                ->willReturnCallback(function($user) {
                    return !empty($user['username']);
                });

        $mock->method('log')
                ->will($this->returnCallback(function($message, $flag) {
                            echo "Write log --> [{$flag}] {$message}";
                        }));

        // WHEN
        $actual1 = $mock->saveUser(['username' => 'vkiet']);
        $actual2 = $mock->saveUser([]);

        // THEN
        $this->assertEquals(true, $actual1);

        $this->assertEquals(false, $actual2);
        $this->expectOutputString('Write log --> [error] Couldn\'t save user: []');
    }
    
    /**
     * @covers \App\User::cryptPassword
     */
    public function testCryptPassword(){
        $user = new \App\User();
        $this->invokeMethod($user, 'cryptPassword', array('123456'));
    }
}
