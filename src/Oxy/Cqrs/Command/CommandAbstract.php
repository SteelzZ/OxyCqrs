<?php
/**
 * @category Oxy
 * @package  Oxy\Cqrs\Command
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Cqrs\Command;

/**
 * Base command class
 *
 * @category Oxy
 * @package  Oxy\Cqrs\Command
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
abstract class CommandAbstract implements CommandInterface
{
    /**
     * @var String
     */
    protected $_commandName;

    /**
     * Init command
     *
     * @param string $commandName
     *
     * @return CommandAbstract
     */
    public function __construct($commandName)
    {
        $this->_commandName = $commandName;
    }

    /**
     * Return command name
     *
     * @return string
     */
    public function getCommandName()
    {
        return $this->_commandName;
    }
}