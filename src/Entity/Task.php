<?php 

namespace App\Entity;

use PhpParser\Node\Expr\FuncCall;

class Task{

    protected $task;
    protected $dueDate;

    public function getTask(): string {
        return $this->task;
    }

    public function setTask(string $task): void{
        $this->task = $task;
    }

    public function getDueDate(): ?\DateTime{
        return $this->dueDate;
    }

    public function setDueData(?\DateTime $dueDate): void{
        $this->dueDate = $dueDate;
    }
}