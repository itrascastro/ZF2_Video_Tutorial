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

namespace Calculator\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Calculator\Model\CalculatorModel;

class CalculatorController extends AbstractActionController
{
    /**
     * @var CalculatorModel
     */
    private $model;

    /**
     * @param CalculatorModel $model
     */
    public function __construct(CalculatorModel $model)
    {
        $this->model = $model;
    }

    public function indexAction()
    {
        $title = $this->layout()->getVariable('title');
        $newTitle = $title . ' - Calculator Home';
        $this->layout()->setVariable('title', $newTitle);

        return ['title' => $newTitle];
    }

    public function addAction()
    {
        $title = $this->layout()->getVariable('title');
        $newTitle = $title . ' - Calculator Add';
        $this->layout()->setVariable('title', $newTitle);

        return ['title' => $newTitle];
    }

    public function addDoAction()
    {
        $this->model->setOp1($this->params()->fromPost('op1'));
        $this->model->setOp2($this->params()->fromPost('op2'));
        $this->model->sum();

        $title = $this->layout()->getVariable('title');
        $newTitle = $title . ' - Calculator Add Result';
        $this->layout()->setVariable('title', $newTitle);

        return ['result' => $this->model->getResult(), 'title' => $newTitle];
    }
}