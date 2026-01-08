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


    public function show(Staffmember $staff)
{
    return Inertia::render('Staff/Show', [
        'staffmember' => $staff
    ]);
}

    public function edit(Staffmember $staff)
    {
         return Inertia::render('Staff/Edit', [
         'staffmember' => new StaffmemberResource($staff)
        ]);
    }

    public function update(Staffmember $staff)
    {
        request()->validate([
            'name'=>['required'],
            'role'=>['required']
        ]);

        $staff->update([
            'name' => request('name'),
            'role' => request('role'),
        ]);
        
        return redirect('staff/'.$staff->id);
    }

    public function destroy(Staffmember $staff)
    {
        $staff->delete();
        return redirect('/staff');
    }
}
