<?php

use App\Behavioral\Iterator\Entity\Task;
use App\Behavioral\Iterator\TaskList;

describe('Iterator Test', function() {
    it('can iterate over task list', function() {
        $tasks = new ArrayObject();
        $tasks->append(new Task('Task 1'));
        $tasks->append(new Task('Task 2'));
        $tasks->append(new Task('Task 3'));
        $tasks->append(new Task('Task 4'));


        $taskList = new TaskList($tasks);
        $iterator = $taskList->getIterator();



        $id = 1;
        while($iterator->valid()) {
            $currentTask = $iterator->current();
            expect($currentTask->getName())
                ->toBe('Task ' . $id);
            $iterator->next();
            $id++;
        }
    });
});