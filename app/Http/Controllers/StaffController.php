<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StaffController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staff = Staff::all();

        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('staff.create');
    }

    public function store(StoreStaffRequest $request)
    {
        $imageName = time().'.'.$request->photo->extension();  
     
        $request->photo->move(public_path('images/staff'), $imageName);

        $request = array_merge($request->validated(), ['photo' => $imageName]);

        Staff::create($request);

        return redirect()->route('staff.index');
    }

    public function show(Staff $staff)
    {
        abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('staff.edit', compact('staff'));
    }

    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        dd($request);
        $staff->update($request->validated());

        return redirect()->route('staff.index');
    }

    public function destroy(Staff $staff)
    {
        abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $staff->delete();

        return redirect()->route('staff.index');
    }
}
