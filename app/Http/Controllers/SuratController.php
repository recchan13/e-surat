<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Surat;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $surats = Surat::latest()->paginate(5);

       //render view with posts
       return view('surat.index', compact('surats'));
   }
   
   public function create(): View
   {
       return view('surat.create');
    }
 
    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nomor'     => 'required',
            'judul'     => 'required',
            'unit'      => 'required',
            'tujuan'    => 'required',
            'posisi'    => 'required'
        ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/surats', $image->hashName());

        //create post
        Post::create([
            'nomor'     => $nomor,
            'judul'     => $judul,
            'unit'      => $unit,
            'tujuan'    => $tujuan,
            'posisi'    => $posisi
        ]);

        //redirect to index
        return redirect()->route('surat.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    // /**
    //  * show
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    public function show(string $id): View
    {
        //get post by ID
        $surats = Surat::findOrFail($id);

        //render view with post
        return view('surats.show', compact('surat'));
    }

    // /**
    //  * edit
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    public function edit(string $id): View
    {
        //get post by ID
        $surats = Post::findOrFail($id);

        //render view with post
        return view('surats.edit', compact('surat'));
    }
        
    // /**
    //  * update
    //  *
    //  * @param  mixed $request
    //  * @param  mixed $id
    //  * @return RedirectResponse
    //  */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nomor'     => 'required',
            'judul'     => 'required',
            'unit'      => 'required',
            'tujuan'    => 'required',
            'posisi'    => 'required'
        ]);

        //get post by ID
        $surat = Surat::findOrFail($id);

        //check if image is uploaded
        // if ($request->hasFile('image')) {

            //upload new image
            // $image = $request->file('image');
            // $image->storeAs('public/posts', $image->hashName());

            //delete old image
            // Storage::delete('public/posts/'.$surat->image);

            //update post with new image
            $surat->update([
                'nomor'     => $request->nomor,
                'judul'     => $request->judul,
                'unit'      => $request->unit,
                'tujuan'    => $request->tujuan,
                'posisi'    => $request->posisi
            ]);

        // } else {

            //update post without image
            // $surat->update([
            //     'title'     => $request->title,
            //     'content'   => $request->content
            // ]);
        // }

        //redirect to index
        return redirect()->route('surats.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // /**
    //  * destroy
    //  *
    //  * @param  mixed $post
    //  * @return void
    //  */
    // public function destroy($id): RedirectResponse
    // {
    //     //get post by ID
    //     $post = Post::findOrFail($id);

    //     //delete image
    //     Storage::delete('public/posts/'. $post->image);

    //     //delete post
    //     $post->delete();

    //     //redirect to index
    //     return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    // }
}
