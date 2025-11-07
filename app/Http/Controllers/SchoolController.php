<?php
namespace App\Http\Controllers;

use App\Models\School;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // Only SuperAdmin can access any method here
        $this->middleware('role:SuperAdmin');
    }

    public function index()
    {
        $schools = School::orderBy('name')->paginate(15);
        return view('schools.index', compact('schools'));
    }

    public function create()
    {
        return view('schools.create');
    }

    public function store(StoreSchoolRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        School::create($data);

        return redirect()->route('schools.index')
                         ->with('success', 'School created successfully.');
    }

    public function edit(School $school)
    {
        return view('schools.edit', compact('school'));
    }

    public function update(UpdateSchoolRequest $request, School $school)
    {
        $school->update($request->validated());
        return redirect()->route('schools.index')
                         ->with('success', 'School updated successfully.');
    }

    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('schools.index')
                         ->with('success', 'School deleted successfully.');
    }
}
