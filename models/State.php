<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:36 PM
 */
abstract class State
{

    protected $task;


    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function getTask()
    {
        return $this->task;
    }

       public function opened()
    {
        echo 'OPENED is not available from this state' . '<br>';
        return $this;
    }


    public function inProgress()
    {
        echo 'IN PROGRESS is not available from this state' . '<br>';
        return $this;
    }
    public function resolved()
    {
        echo 'RESOLVED is not available from this state' . '<br>';
        return $this;
    }

    public function reopened()
    {
        echo 'REOPENED is not available from this state' . '<br>';
        return $this;
    }

    public function verified()
    {
        echo 'VERIFIED is not available from this state' . '<br>';
        return $this;
    }

    public function closed()
    {
        echo 'CLOSED is not available from this state' . '<br>';
        return $this;
    }
}
