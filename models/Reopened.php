<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:42 PM
 */
require_once ("State.php");

class Reopened extends State
{

    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('Reopened');
    }

    public function inProgress()
    {
        $this->task->inProgress();
        return new InProgress($this->task);
    }
}
