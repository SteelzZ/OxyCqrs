<?php
/**
 * @category Oxy
 * @package  Oxy\Cqrs\Command
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Cqrs\Command;

use Oxy\Core\Guid;

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
     * @var Guid
     */
    protected $_guid;

    /**
     * @var string
     */
    protected $_realIdentifier;

    /**
     * @param string $commandName
     * @param Guid   $guid
     * @param mixed  $realIdentifier
     *
     * @return CommandAbstract
     */
    public function __construct($commandName, Guid $guid, $realIdentifier)
    {
        $this->_commandName = $commandName;
        $this->_guid = $guid;
        $this->_realIdentifier = $realIdentifier;
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

    /**
     * Return GUID
     *
     * @return Guid
     */
    public function getGuid()
    {
        return $this->_guid;
    }

    /**
     * Return real identifier
     *
     * @return string
     */
    public function getRealIdentifier()
    {
        return $this->_realIdentifier;
    }
}