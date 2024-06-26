<?php

namespace App\Behavioral\Iterator\Entity;

use ArrayObject;
use Iterator;

final class TaskIterator implements Iterator
{
    private ArrayObject $tasks;
    private int $position = 0;

    public function __construct(ArrayObject $tasks)
    {
        $this->tasks = $tasks;
    }

    public function current(): Task
    {
        return $this->tasks[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->tasks[$this->position]);
    }



}