<?php
namespace ShoppingFeed\Exception;

class InvalidArgumentException extends \InvalidArgumentException
{
    /**
     * @param array|string $expected
     * @param mixed        $actual
     * @param int          $code
     * @param null         $previous
     *
     * @return static
     */
    public static function with($expected, $actual, $code = 0, $previous = null)
    {
        $message = vsprintf('Expecting instances of %s, got %s', [
            implode(', ', (array) $expected),
            is_object($actual) ? get_class($actual) : gettype($actual)
        ]);

        return new static($message, $code, $previous);
    }
}
