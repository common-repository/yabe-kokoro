<?php

declare (strict_types=1);
namespace _YabeKokoro\Rosua\Migrations\Exception;

use RuntimeException;
final class AbortMigration extends RuntimeException implements ControlException
{
}
