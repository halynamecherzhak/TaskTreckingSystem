<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:39 PM
 */
require_once ("State.php");

class InProgress extends State
{

    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('In Progress');
    }

    public function resolved()
    {
        $this->task->resolved();
        return new Resolved($this->task);
    }

    public function closed()
    {
        $this->task->closed();
        return new Closed($this->task);
    }
}
