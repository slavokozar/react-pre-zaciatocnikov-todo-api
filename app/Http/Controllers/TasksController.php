<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display all tasks
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auth::user()->tasks;
    }

    /**
     * Create a new task
     *
     * @param TaskRequest $request
     * @return \App\Models\Task
     */
    public function store(TaskCreateRequest $request)
    {
        $task = Task::create($request->all());

        return $task;
    }


    /**
     * Update the task
     *
     * @param TaskRequest $request
     * @return \App\Models\Task
     */
    public function update(TaskUpdateRequest $request, Task $task)
    {
        $task->update(
            array_merge(
                $request->all(),
                [
                    'completed_at' => $request->input('active', false) === true ? null : Carbon::now()
                ]
            )
        );

        /** @var Task $task */
        return $task;
    }

    /**
     *
     * @param Task $task
     */
    public function destroy(Task $task){
        $task->delete();
    }
}
