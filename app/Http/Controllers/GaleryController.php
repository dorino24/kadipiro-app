<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function index_guest()
    {
        return view('guest.galery', [
            'galery' => galery::all(),
            'perikanan' => Post::where('category_id', 1)->get(),
        ]);
    }

    public function index()
    {
        $galery = galery::latest()->paginate(10);
        if (request('search')) {
            $galery = galery::where('judul', 'LIKE', '%' . request('search') . '%')->paginate(10);
        }

        return view('admin.dashboardGalery', [
            'galery' => $galery,
        ]);
    }
    
    public function create()
    {
        return view('admin.addGalery');
    }

    public function edit(galery $galery)
    {
        return view('admin.editGalery', [
            'galery' => $galery
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $galeryValidated = $request->validate([
            'judul' => 'required',
            'image' => 'image|file|max:40960|required',
        ]);
        if ($request->file('image')) {
            $galeryValidated['image'] = $request->file('image')->store('galery');

            galery::create($galeryValidated);

            return redirect('/dashboardGalery')->with('success', 'Berhasil upload galery!');
        }
    }

    public function update(Request $request, galery $galery)
    {
        $rules = [
            'judul' => 'required|max:255',
            'image' => 'image|file|max:4096',
        ];
        $galeryValidated = $request->validate($rules);
        
        if ($request->file('image')) {
            if ($galery->image) {
                Storage::delete($galery->image);
            }
            $galeryValidated['image'] = $request->file('image')->store('galery');
        }

        galery::where('id', $galery->id)->update($galeryValidated);
        return redirect('/dashboardGalery')->with('success', 'Berhasil mengubah galery');
    }
    public function destroy(galery $galery)
    {
        if ($galery->image) {
            Storage::delete($galery->image);
        }

        galery::destroy($galery->id);

        return redirect('/dashboardGalery')->with('success', 'Galery has been deleted!');
    }
}
