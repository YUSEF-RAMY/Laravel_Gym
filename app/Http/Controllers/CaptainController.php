<?php

namespace App\Http\Controllers;

use App\Models\Captain;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CaptainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $captains = Captain::all();
        return view('dashb' , compact('captains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('capains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'specialty' => 'required|string',
            'phone' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        //add captains
        if($request->hasFile('image')){
            $image = $request->file('image')->move('uploads/captains', Str::uuid()->toString() . '-' . $request->file('image')->getClientOriginalName());
            $data['image'] = $image;
        }

        Captain::create($data);
        return redirect()->route('captains.index')->with('success' , 'تم اضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Captain $captain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Captain $captain)
    {
        return view('captains.edit' , compact('captain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Captain $captain)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'specialty' => 'required|string',
            'phone' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        if($request->hasFile('image')){
            // delete old image
            if ($captain->image) {
                unlink(public_path($captain->image));
            }
            // store a new image
            $image = $request->file('image')->move('uploads/captains', Str::uuid()->toString() . '-' . $request->file('image')->getClientOriginalName());
            $data['image'] = $image;
        }
        $captain->update($data);
        return redirect()->route('captains.index')->with('success' , 'تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Captain $captain)
    {
        // delete image if isset
        $captain = Captain::findOrFail($captain);
        $captain->delete();
        return redirect()->route('captains.index')->with('success' , 'تم الحذف بنجاح');
    }
}
