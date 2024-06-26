<?php

namespace App\Behavioral\Iterator;

use App\Behavioral\Iterator\Entity\TaskIterator;
use ArrayObject, 
    Iterator, 
    IteratorAggregate;

final class TaskList implements IteratorAggregate
{
    private ArrayObject $tasks;

    public function __construct(ArrayObject $tasks)
    {
        $this->tasks = $tasks;
    }

    public function getIterator(): Iterator
    {
        return new TaskIterator($this->tasks);
    }

}