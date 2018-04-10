<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:44 PM
 */
require_once ("State.php");

class Verified extends State
{

    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('Verified');
    }

    public function closed()
    {
        $this->task->closed();
        return new Closed($this->task);
    }
}
