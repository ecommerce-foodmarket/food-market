<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses= Status::all();
        return view('status.index', compact('statuses'));
    }

    public function create()
    {
        return view('status.create');
    }

    public function store(Request $request)
    {
         $status = new Status;
         $status-> name_status = $request-> name_status;
         $status-> save();
        return redirect()->route('status.index');
    }

    public function edit(Status $status)
    {
        return view('status.edit', compact('status'));
    }

    public function update(Request $request, Status $status)
{
        $status->update([
        'name_status' => $request->name_status,
    ]);
    
        return redirect()->route('status.index');
}

     public function show(Status $status)
     {
         return view('status.show', compact('status'));
     }
     public function destroy(Status $status)
     {
        $status->delete();
        return redirect()->route('status.index');
     }
}
