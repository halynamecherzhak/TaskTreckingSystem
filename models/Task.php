<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/10/2018
 * Time: 1:31 PM
 */
class Task {

    private $author;

    private $status = '';

    public function __construct($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

    }

    public function opened()
    {
        echo 'The author is ' . $this->getAuthor() . ' OPENED' . '<br>';
        return $this;

    }

        public function inProgress()
    {
        echo 'The author is ' . $this->getAuthor() . ' IN PROGRESS' . '<br>';
        return $this;
    }

    public function resolved()
    {
        echo 'The author is ' . $this->getAuthor() . ' RESOLVED' . '<br>';
        return $this;
    }

        public function reopened()
    {
        echo 'The author is ' . $this->getAuthor() . ' REOPENED' . '<br>';
        return $this;
    }

       public function verified()
    {
        echo 'The author is ' . $this->getAuthor() .  ' VERIFIED' . '<br>';
        return $this;
    }

    public function closed()
    {
        echo 'The author is ' . $this->getAuthor() .' CLOSED' . '<br>';
        return $this;
    }

}