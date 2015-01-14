<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Calculator\Model;


class CalculatorModel 
{
    /**
     * @var int
     */
    private $op1;

    /**
     * @var int
     */
    private $op2;

    /**
     * @var int
     */
    private $result;

    function __construct()
    {
        $this->result = 0;
    }

    public function sum()
    {
        $this->result = $this->op1 + $this->op2;
    }

    public function subtract()
    {
        $this->result = $this->op1 - $this->op2;
    }

    public function multiply()
    {
        $this->result = $this->op1 * $this->op2;
    }

    public function divide()
    {
        $this->result = (int) ($this->op1 / $this->op2);
    }

    /**
     * @return int
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param int $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return int
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param int $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

}