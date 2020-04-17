<?php
include "Queue.php";
include "Node.php";

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

$queue->dequeue();
$queue->dequeue();

if ($queue->isEmpty()){
    echo "Queue rong!!";
}

$queue->enqueue(4);
$queue->enqueue(5);

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();

if ($queue->isEmpty()){
    echo "Queue rong 2!!";
}

var_dump($queue);