<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:43 PM
 */
require_once ("State.php");

class Resolved extends State
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('Resolved');
    }


    public function verified()
    {
        $this->task->verified();
        return new Verified($this->task);
    }


    public function reopened()
    {
        $this->task->reopened();
        return new Reopened($this->task);
    }
}
