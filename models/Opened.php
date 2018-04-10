<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:41 PM
 */
require_once ("State.php");

class Opened extends State
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->opened();
        $this->task->setStatus('Opened');
    }

    public function inProgress()
    {
        $this->task->inProgress();
        return new InProgress($this->task);
    }
}
