<?php

namespace App\Http\Controllers;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->paginate(10);
        return view('admin.aplikasi.index', compact('applications'));
    }

    public function store(ApplicationRequest $request)
    {
        $data = $request->validated();

        // auto slug kalau kosong
        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

        Application::create($data);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(ApplicationRequest $request, Application $application)
    {
        $data = $request->validated();
        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

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
