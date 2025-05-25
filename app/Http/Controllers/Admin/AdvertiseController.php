<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $advertise = Advertise::all();
            return view('admin.advertise.index', compact('advertise'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advertise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
// return $request;
    // $request->validate([
    //     'company_name' => 'required|string|max:255',
    //     'link' => 'required|url|max:255',
    //     'expiry_date' => 'required|date',
    //     'contact' => 'required|string|max:255',
    //     'image' => '|image|mimes:jpg,jpeg,png,gif|max:2048',
    // ]);


    $advertise = new Advertise();
    $advertise->company_name = $request->company_name;
    $advertise->link = $request->link;
    $advertise->expire_date = $request->expire_date;
    $advertise->contact = $request->contact;

   $file = $request->image;
       if($file) {
        $filename = time().".".$file->getClientOriginalExtension();
        $file->move('images', $filename);
        $advertise->image = "images/$filename";
       }


    $advertise->save();


    return redirect()->route('admin.advertise.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advertise = Advertise::findorfail($id);
        return view('admin.advertise.edit', compact('advertise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $advertise = Advertise::findorfail($id);
    $advertise->company_name = $request->company_name;
    $advertise->link = $request->link;
    $advertise->expire_date = $request->expire_date;
    $advertise->contact = $request->contact;

   $file = $request->image;
       if($file) {
        $filename = time().".".$file->getClientOriginalExtension();
        $file->move('images', $filename);
        $advertise->image = "images/$filename";
       }
       $advertise->save();
       return redirect()->route('admin.advertise.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertise = Advertise::findorfail($id);
        $advertise->delete();
        return redirect()->back();
    }
}
