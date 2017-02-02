<?php

namespace Jkirkby91\Boilers\SchemaBoilers;

/**
 * Class SemanticContract
 *
 * @package app\Contracts
 * @author James Kirkby <me@jameskirkby.com>
 */
interface SchemaContract
{

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);
}