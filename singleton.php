<?php
final class UserFactory
{
    /**
     * Call this method to get singleton
     * @return UserFactory
     */
    public static function Instance()
    {
        static $instance = null;
        if(null === $instance)
        {
            $instance = new UserFactory();
        }
        return $instance;
    }

    /**
     * private constructor, so nobody else can instance it
     */
    private function __construct()
    {
    }
}

$fact = UserFactory::Instance();
$fact2 = UserFactory::Instance();

$fact == $fact2;

$fact = new UserFactory();
