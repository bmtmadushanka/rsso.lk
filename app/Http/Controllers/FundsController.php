<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class FundsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        $imageName = time().'.'.$request->photo->extension();  
     
        $request->photo->move(public_path('images/services'), $imageName);

        $request = array_merge($request->validated(), ['photo' => $imageName]);
        Task::create($request);

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        if($request->photo){
            $imageName = time().'.'.$request->photo->extension();  
     
            $request->photo->move(public_path('images/services'), $imageName);
    
            $request = array_merge($request->validated(), ['photo' => $imageName]);
        }
       
        $task->update($request);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $task->delete();

        return redirect()->route('tasks.index');
    }
}
