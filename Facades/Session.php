<?php

/**
 * Lenevor Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file license.md.
 * It is also available through the world-wide-web at this URL:
 * https://lenevor.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@Lenevor.com so we can send you a copy immediately.
 *
 * @package     Lenevor
 * @subpackage  Base
 * @link        https://lenevor.com
 * @copyright   Copyright (c) 2019 - 2021 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

namespace Syscodes\Support\Facades;

/**
 * Initialize the Session class facade.
 *
 * @author Alexander Campo <jalexcam@gmail.com>
 * 
 * @method static string getName()
 * @method static bool start()
 * @method static array all()
 * @method static string getId()
 * @method static void setId(string $id)
 * @method static bool isValidId(string $id)
 * @method static void save()
 * @method static void pull(array|string $keys)
 * @method static void push(string $key, mixed $value)
 * @method static bool has(array|string $key)
 * @method static mixed get(string $key, mixed $default = null)
 * @method static mixed put(array|string $key, mixed $value = null)
 * @method static mixed remove(string $key)
 * @method static void flush()
 * @method static string token()
 * @method static void regenerateToken()
 * @method static void regenerate(bool $destroy = false)
 * @method static bool migrate(bool $destroy = false)
 * @method static bool isStarted()
 * @method static string getDefaultDriver()
 * 
 * @see \Syscodes\Session\Store
 * @see \Syscodes\Session\SessionManager
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     * 
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}