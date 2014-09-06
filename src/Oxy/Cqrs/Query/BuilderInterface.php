<?php
/**
 * @category Oxy
 * @package  Oxy\Cqrs\Query
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */

namespace Oxy\Cqrs\Query;

/**
 * @category Oxy
 * @package  Oxy\Cqrs\Query
 * @author   Tomas Bartkus <to.bartkus@gmail.com>
 */
interface BuilderInterface
{
    /**
     * Return DTO object
     *
     * @param array $args
     *
     * @return mixed
     */
    public function getDto(array $args = array());
}