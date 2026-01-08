<?php

namespace App\Http\Controllers;

use App\Models\Duty;
use App\Models\Staffmember;
use App\Models\Task;

class DutyController extends Controller
{
    public function index()
    {
        return view('duties.index', [
            'duties' => Duty::with(['staffmember', 'task'])->get()
        ]);
    }


    public function create()
    {
        return view('duties.create',[
            'staff' => Staffmember::all(),
            'task' => Task::all()
        ]);
    }

    public function store()
    {
        request()->validate([
        'staffmember_id'=>['required'],
        'task_id'=>['required'],
        'dutydate'=>['required'],
        ]);

        Duty::create([
        'staffmember_id' => request('staffmember_id'),
        'task_id' => request('task_id'),
        'dutydate' => request('dutydate'),
        'shift_type' => request('shift_type'),
        'hours' => request('hours'),
        ]);
        return redirect('/duties');
    }

    public function show(Duty $duty)
    {
        return view('duties.show', ['duty' => $duty]);
    }

    public function edit(Duty $duty)
    {
        return view('duties.edit', [
            'duty' => $duty,
            'staff' => Staffmember::all(),
            'tasks' => Task::all(),
        ]);
    }

    public function update(Duty $duty)
    {
        request()->validate([
        'staffmember_id'=>['required'],
        'task_id'=>['required'],
        'dutydate'=>['required'],
        ]);

        $duty->update([
            'staffmember_id' => request('staff_id'),
            'task_id' => request('task_id'),
            'dutydate' => request('dutydate')
        ]);
        return redirect('duties/'.$duty->id);
    }

    public function destroy(Duty $duty)
    {
        $duty->delete();
        return redirect('/duties');
    }
}