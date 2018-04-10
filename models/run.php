<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:46 PM
 */
require_once ("Closed.php");
require_once ("InProgress.php");
require_once ("Opened.php");
require_once ("Reopened.php");
require_once ("Resolved.php");
require_once ("State.php");
require_once ("Task.php");
require_once ("Verified.php");

$task = new Task('Halyna');

//status is Opened

$newTask = new Opened($task);
echo 'Status: '. $task->getStatus() . "<br>";

//status is InProgress

$newTask = $newTask->inProgress();
echo 'Status: '. $task->getStatus() . '<br>';

//status is Resolved

$newTask = $newTask->resolved();
echo 'Status: '. $task->getStatus() . '<br>';

//status is Reopened

$newTask = $newTask->Reopened();
echo 'Status: '. $task->getStatus() . '<br>';

//not available
$newTask->verified();
echo 'Status: '. $task->getStatus() . '<br>';

