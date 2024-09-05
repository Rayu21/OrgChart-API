<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{

    public function index(Request $request)
    {
        $query = Position::query();

        if ($request->has('search')){
            $query->where('name', 'like', '%' . $request->search. '%');
        }

        return $query->orderBy('name')->get();


    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:positions,name',
        'report_To' => 'nullable|exists:positions,id',
        ]);

        $position = Position::create($validated);
        return response()->json($position, 201);
    }


    public function show($id)
    {
        $position = Position::findOrFail($id);
        return response()->json($position);

    }


    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);

        $validated = $request->validate([
            'name' => ['required' , Rule::unique('positions')->ignore($id)],
            'reports_to' => ['nullable' ,'exists:positions,id']
        ]);

        $position->update($validated);
        return response()->json($position);
    }


    public function destroy($id)
    {
        $position = Position::findOrFail($id);
        $position->delete();
        return response()->noContent();
    }
}
