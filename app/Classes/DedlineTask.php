<?php

namespace app\Classes;

use app\Classes\Task;
use app\Interfaces\HasDueDateInterface;
use app\Interfaces\HasStartDateInterface;
use app\Traits\HasAssigneeTrait;


class DedlineTask extends Task implements HasStartDateInterface, HasDueDateInterface
{
    use HasAssigneeTrait;
    protected $startDate;
    protected $dueDate;
    protected $priority;


    //Method
    public function __construct($title, $description, $startDate, $dueDate, $priority)
    {

        parent::__construct($title, $description);

        $this->startDate = $startDate;

        $this->dueDate = $dueDate;
        $this->priority = $priority;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }


    public function getPriority()
    {
        // return "Low";
        return $this->priority;
    }
    public function markAsCompleted()
    {
        $this->completed = true;
    }
}
