<?php
namespace Vendor\Module\Test\Unit\Model;

use PHPUnit\Framework\TestCase;
use Vendor\Module\Model\CustomGreeting;

class CustomGreetingTest extends TestCase
{
    /**
     * @var CustomGreeting
     */
    protected $model;

    /**
     * Set up test environment
     */
    protected function setUp(): void
    {
        $this->model = new CustomGreeting();
    }

    /**
     * Test getGreetingMessage method
     */
    public function testGetGreetingMessage()
    {
        // Test default greeting
        $this->assertEquals(
            'Hello, welcome to our store!',
            $this->model->getGreetingMessage()
        );
        
        // Test greeting with custom name
        $this->assertEquals(
            'Hello John, welcome to our store!',
            $this->model->getGreetingMessage('John')
        );
    }
    
    /**
     * Test greeting type functionality
     */
    public function testGetGreetingByType()
    {
        // Test morning greeting
        $this->assertEquals(
            'Good morning, welcome to our store!',
            $this->model->getGreetingByType('morning')
        );
        
        // Test evening greeting
        $this->assertEquals(
            'Good evening, welcome to our store!',
            $this->model->getGreetingByType('evening')
        );
        
        // Test invalid type defaults to standard greeting
        $this->assertEquals(
            'Hello, welcome to our store!',
            $this->model->getGreetingByType('invalid_type')
        );
    }
}