<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{

    public function view()
    {
        $travels = Travel::all();
        return view('travels', compact('travels'));
    }

    public function index()
    {
        $travels = Travel::all();
        if ($travels->isEmpty()) {
            return response()->json(['message' => 'No travels found'], 404);
        }
        return response()->json(['data' => $travels], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'rating' => 'required|numeric|between:0,5',
            'visitors' => 'required|integer',
            'category' => 'required|string',
        ]);


        $travel = Travel::create($request->all());
        return redirect('travels');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $travel = Travel::find($id);
        return view('travels.edit', compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'rating' => 'required|numeric|between:0,5',
            'visitors' => 'required|integer',
            'category' => 'required|string',
        ]);
        $travel = Travel::find($id);
        $travel->update($request->all());
        return redirect('travels');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $travel = Travel::find($id);
        $travel->delete();
        return redirect('travels');
    }
}
