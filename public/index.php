<?php

use app\Classes\DedlineTask;
use app\Classes\TaggedDeadlineTask;

include 'autoloader.php';

$task1 = new TaggedDeadlineTask("Task 1", "Should be done withis thursday", "15-10-2023", "30-10-2023", "Heigh");

$task1->addTag("Fronted");
$task1->addTag("Contact Page");
$task1->addAssignee("Reza");
$task1->addAssignee("Takbir");


$task2 = new DedlineTask("Task 2", "Should be complete within 3 day", "16-10-2023", "25-10-2023", "Low");

$task2->addAssignee("Anjum");


$tasks = [$task1, $task2];

foreach ($tasks as $task) {
    echo "\nTitle: " . $task->getTitle() . "\n";
    echo "\nDescription: " . $task->getDescription() . "\n";
    echo "\nStart Date: " . $task->getStartDate() . "\n";
    echo "\nDue Date: " . $task->getDueDate() . "\n";

    if ($task instanceof TaggedDeadlineTask) {
        echo "Tages: " . implode(", ", $task->getTags()) . "\n";
    }
    echo "Assignee: " . implode(", ", $task->getAssigness()) . "\n";

    echo "Priority: " . $task->getPriority() . "\n";

    echo "Completed: " . ($task->isCompleted() ? "Yes" : "No") . "\n\n";
}
