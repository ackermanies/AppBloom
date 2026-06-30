<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();

        return view('applications.index', compact('applications'));
    }

    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'developer' => 'required|max:255',
            'version' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Application::create([
            'name' => $request->name,
            'developer' => $request->developer,
            'version' => $request->version,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()
            ->route('applications.index')
            ->with('success', 'Application added successfully.');
    }

    public function edit(Application $application)
    {
        return view('applications.edit', compact('application'));
    }

    public function update(Request $request, Application $application)
    {
        $request->validate([
            'name' => 'required|max:255',
            'developer' => 'required|max:255',
            'version' => 'required|max:100',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'developer' => $request->developer,
            'version' => $request->version,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $application->update($data);

        return redirect()
            ->route('applications.index')
            ->with('success', 'Application updated successfully.');
    }

    public function destroy(Application $application)
    {
        if (file_exists(public_path('images/' . $application->image))) {
        unlink(public_path('images/' . $application->image));
        }

        $application->delete();

        return redirect()
            ->route('applications.index')
            ->with('success', 'Application deleted successfully.');
    }
}