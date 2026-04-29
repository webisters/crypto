<?php
/*
 * This file is part of Webisters Crypto Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Crypto;

use Framework\Crypto\Password;

class PasswordMock extends Password
{
    public static function getSodiumMemLimit(int $constant) : int
    {
        return parent::getSodiumMemLimit($constant);
    }

    public static function getSodiumOpsLimit(int $constant) : int
    {
        return parent::getSodiumOpsLimit($constant);
    }
}
