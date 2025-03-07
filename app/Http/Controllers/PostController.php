<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\galery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index_umkm()
    {
        return view('guest.umkm', [
            'kuliner' => Post::where('category_id', 5)->get(),
            'kerajinan' => Post::Where('category_id', 6)->get()
        ]);
    }

    public function index_komoditas()
    {
        return view('guest.komoditas', [
            'lele' => Post::where('category_id', 1)->get(),
            'kambing' => Post::where('category_id', 2)->get(),
            'sapi' => Post::where('category_id', 3)->get(),
            'pertanian' => Post::Where('category_id', 4)->get()
        ]);
    }
    public function showPost(Post $post)
    {
        return view('guest.selengkapnya', [
            'post' => $post,
        ]);
    }
   


    public function index()
    {
        // dd(request('search'));
        $post = Post::latest()->paginate(15);
        if (request('search')) {
            $post = Post::where('judul', 'LIKE', '%' . request('search') . '%')->paginate(15);
        }

        return view('admin.dashboard', [
            'posts' => $post,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $postValidated = $request->validate([
            'judul' => 'required|max:255|unique:posts',
            // Unik dari tabel posts
            'category_id' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:5000|required',
            'image2' => 'image|file|max:5000|required',
            'image3' => 'image|file|max:5000|required',
            'image4' => 'image|file|max:5000',
            'image5' => 'image|file|max:5000',
            'image6' => 'image|file|max:5000',
            'isi' => 'required'
        ]);
        $postValidated['wa']='+62'.$request->wa; 
        $postValidated['facebook']=$request->facebook; 
        $postValidated['ig'] = $request->ig;
        $postValidated['short'] = str_replace(' ', '-', $request->judul);
        if ($request->file('image')) {
            $postValidated['image'] = $request->file('image')->store('post-images');
        }
        if ($request->file('image2')) {
            $postValidated['image2'] = $request->file('image2')->store('post-images');
         }
        if ($request->file('image3')) {
            $postValidated['image3'] = $request->file('image3')->store('post-images');
         }
        if ($request->file('image4')) {
            $postValidated['image4'] = $request->file('image4')->store('post-images');
         }
        if ($request->file('image5')) {
            $postValidated['image5'] = $request->file('image5')->store('post-images');
         }
        if ($request->file('image6')) {
            $postValidated['image6'] = $request->file('image6')->store('post-images');
         }

        // $postValidated['user_id'] = auth()->user()->id;
        $postValidated['excerpt'] = Str::limit(strip_tags($request->isi), 150);
        Post::create($postValidated);

        return redirect('/dashboard')->with('success', 'Berhasil upload artikel!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('guest.selengkapnya', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'judul' => 'required|max:255',
            'category_id' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:4096',
            'image2' => 'image|file|max:4096',
            'image3' => 'image|file|max:4096',
            'image4' => 'image|file|max:4096',
            'image5' => 'image|file|max:4096',
            'image6' => 'image|file|max:4096',
            'isi' => 'required'
        ];
        $postValidated = $request->validate($rules);
        
        $postValidated['wa']='+62'.$request->wa; 
        $postValidated['facebook']=$request->facebook; 
        $postValidated['ig'] = $request->ig;    
        $postValidated['short'] = str_replace(' ', '-', $request->judul);
        if ($request->file('image')) {
            if ($post->image) {
                Storage::delete($post->image);
            }
            $postValidated['image'] = $request->file('image')->store('post-images');
        }
        if ($request->file('image2')) {
            if ($post->image2) {
                Storage::delete($post->image2);
            }
            $postValidated['image2'] = $request->file('image2')->store('post-images');
        } 
        if ($request->file('image3')) {
            if ($post->image3) {
                Storage::delete($post->image3);
            }
            $postValidated['image3'] = $request->file('image3')->store('post-images');
        }
        if ($request->file('image4')) {
            if ($post->image4) {
                Storage::delete($post->image4);
            }
            $postValidated['image4'] = $request->file('image4')->store('post-images');
        }
        if ($request->file('image5')) {
            if ($post->image5) {
                Storage::delete($post->image5);
            }
            $postValidated['image5'] = $request->file('image5')->store('post-images');
        }
        if ($request->file('image6')) {
            if ($post->image6) {
                Storage::delete($post->image6);
            }
            $postValidated['image6'] = $request->file('image6')->store('post-images');
        }
        $postValidated['excerpt'] = Str::limit(strip_tags($request->isi), 250);

        Post::where('id', $post->id)->update($postValidated);
        return redirect('/dashboard')->with('success', 'Berhasil mengubah artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard')->with('success', 'Post has been deleted!');
    }
}
