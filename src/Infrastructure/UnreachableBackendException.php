<?php
namespace ShoppingFeed\Exception\Infrastructure;

/**
 * Backend like database or any other external infrastructure was unreachable
 * when operation was attempted.
 *
 * This exception should be temporary and operation can be attempted again later.
 */
class UnreachableBackendException extends InfrastructureException
{

}
