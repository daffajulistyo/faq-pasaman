<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Application;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $query = Faq::with('application');

        // 🔍 SEARCH
        if ($request->search) {
            $query->where('question', 'like', '%' . $request->search . '%')
                ->orWhere('answer', 'like', '%' . $request->search . '%');
        }

        // 📂 FILTER PER APLIKASI
        if ($request->application_id) {
            $query->where('application_id', $request->application_id);
        }

        $faqs = $query->latest()->paginate(10)->withQueryString();
        $applications = Application::all();

        return view('admin.faqs.index', compact('faqs', 'applications'));
    }

    public function store(FaqRequest $request)
    {
        Faq::create([
            ...$request->validated(),
        ]);

        return back()->with('success', 'FAQ berhasil ditambahkan');
    }

    public function update(FaqRequest $request, Faq $faq)
    {
        $faq->update([
            ...$request->validated(),
        ]);

        return back()->with('success', 'FAQ berhasil diupdate');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return back()->with('success', 'FAQ berhasil dihapus');
    }
}
