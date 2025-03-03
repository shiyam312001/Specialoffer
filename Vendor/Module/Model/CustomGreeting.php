<?php
namespace Vendor\Module\Model;

class Greeting
{
    /**
     * Get greeting message
     *
     * @param string $name
     * @param string $message
     * @return string
     */
    public function getGreetingMessage($name = 'Guest', $message = 'Welcome to our store.')
    {
        // If name is empty, use Guest as default
        if (empty($name)) {
            $name = 'Guest';
        }
        
        return "Hello, {$name}! {$message}";
    }
    
    /**
     * Get time-based greeting based on the current hour
     *
     * @param string $name
     * @return string
     */
    public function getTimeBasedGreeting($name = 'Guest')
    {
        $hour = (int)$this->getCurrentDateTime()->format('H');
        
        if ($hour >= 5 && $hour < 12) {
            $timeGreeting = 'Good morning';
        } elseif ($hour >= 12 && $hour < 18) {
            $timeGreeting = 'Good afternoon';
        } else {
            $timeGreeting = 'Good evening';
        }
        
        return "{$timeGreeting}, {$name}! Welcome to our store.";
    }
    
    /**
     * Get current DateTime object
     * 
     * @return \DateTime
     */
    public function getCurrentDateTime()
    {
        return new \DateTime();
    }
}