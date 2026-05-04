<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Models\Application;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $query = Application::query();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $applications = $query->latest()->paginate(10)->withQueryString();

        return view('admin.aplikasi.index', compact('applications'));
    }

    public function store(ApplicationRequest $request)
    {
        $data = $request->validated();


        Application::create($data);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(ApplicationRequest $request, Application $application)
    {
        $data = $request->validated();

        $application->update($data);

        return back()->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Application $application)
    {
        $application->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }

    public function show(Application $application)
    {
        return view('admin.aplikasi.modal.show', compact('application'));
    }
}
