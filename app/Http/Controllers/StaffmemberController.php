<?php

namespace App\Http\Controllers;

use App\Models\Staffmember;
use App\Http\Resources\StaffmemberResource;
use Inertia\Inertia;

class StaffmemberController extends Controller
{
    public function index()
    {
         return Inertia::render('Staff/Index', [
         'staff' => StaffmemberResource::collection(Staffmember::all())
        ]);
    }

    public function create()
    {
        return Inertia::render('Staff/Create');
    }

    public function store()
    {
        request()->validate([
            'name'=>['required'],
            'role'=>['required']
        ]);

        Staffmember::create([
            'name' => request('name'),
            'role' => request('role'),
        ]);
        return redirect('/staff');
    }


    public function show(Staffmember $staffmember)
    {
        return Inertia::render('Staff/Show', [
         'staffmember' => new StaffmemberResource($staffmember)
        ]);
    }

    public function edit(Staffmember $staffmember)
    {
        return view('staff.edit', ['staffmember' => $staffmember]);
    }

    public function update(Staffmember $staffmember)
    {
        request()->validate([
            'name'=>['required'],
            'role'=>['required']
        ]);

        $staffmember->update([
            'name' => request('name'),
            'role' => request('role'),
        ]);
        return redirect('staff/'.$staffmember->id);

    }

    public function destroy(Staffmember $staffmember)
    {
        $staffmember->delete();
        return redirect('/staff');
    }
}
