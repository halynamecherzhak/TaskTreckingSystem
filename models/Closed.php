<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:38 PM
 */
require_once ("State.php");

class Closed extends State
{

    public function __construct(Task $task)
    {
        parent::__construct($task);
        $this->task->setStatus('Closed');
    }
}
