<?php
/**
 * @category Oxy
 * @package  Oxy\Cqrs\Command
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Cqrs\Command;

/**
 * Command interface
 *
 * @category Oxy
 * @package  Oxy\Cqrs\Command
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
interface CommandInterface
{
    /**
     * Return command name
     *
     * @return String
     */
    public function getCommandName();
}