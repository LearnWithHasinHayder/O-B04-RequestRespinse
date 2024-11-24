<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller {
    private $tasks = [
        [
            'id' => 1,
            'name' => 'Task 1',
            'description' => 'This is task 1'
        ],
        [
            'id' => 2,
            'name' => 'Task 2',
            'description' => 'This is task 2'
        ],
        [
            'id' => 3,
            'name' => 'Task 3',
            'description' => 'This is task 3'
        ],
        [
            'id' => 4,
            'name' => 'Task 4',
            'description' => 'This is task 4'
        ],
        [
            'id' => 5,
            'name' => 'Task 5',
            'description' => 'This is task 5'
        ]
    ];

    function index() {
        // return response($this->tasks);
        return response()->json($this->tasks);
    }

    function show($taskId) {

        if ($taskId <= 0 || $taskId > count($this->tasks)) {
            // abort(404);
            $result = [
                'error' => 'Task not found'
            ];
            return response()->json($result, 404);
        }
        $task = $this->tasks[$taskId - 1];
        // return response("Task ID is {$taskId}, And Actual Task ID is {$actualTask}");
        return response()->json($task);
    }
}
