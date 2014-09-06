<?php
/**
 * @category Oxy
 * @package  Oxy\Cqrs\Command\Handler
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Cqrs\Command\Handler;

use Oxy\Cqrs\Command\CommandInterface;

/**
 * Command handler interface
 *
 * @category Oxy
 * @package  Oxy\Cqrs\Command\Handler
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
interface HandlerInterface
{
    /**
     * @param CommandInterface $command
     */
    public function execute(CommandInterface $command);
}