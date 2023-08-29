<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Disposisi;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Response;


class DisposisiController extends Controller
{
    /**
    * index
    *
    * @return View
    */
   public function index(): View
   {
       //get posts
       $disposisi = Disposisi::latest()->paginate(5);

       //render view with posts
       return view('disposisi.index', compact('disposisi'));
   }
   
   public function create(): View
   {
       return view('disposisi.create');
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
            'nomor'         => 'required',
            'unit'          => 'required',
            'tujuan'        => 'required',
            'posisi'        => 'required',
            'id_surat_disposisi'    => 'required',
            'id_surat_balasan'      => 'required'
        ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/surats', $image->hashName());

        //create post
        Disposisi::create([
            'nomor'         => $request->nomor,
            'unit'          => $request->unit,
            'tujuan'        => $request->tujuan,
            'posisi'        => $request->posisi,
            'id_surat_disposisi'    => $request->id_surat_disposisi,
            'id_surat_balasan'      => $request->id_surat_balasan
        ]);

        //redirect to index
        return redirect()->route('disposisi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function show(string $id): View
    {
        //get post by ID
        $disposisi = Disposisi::findOrFail($id);

        //render view with post
        return view('disposisi.show', compact('disposisi'));
    }


    public function edit(string $id): View
    {
        //get post by ID
        $disposisi = Disposisi::findOrFail($id);

        //render view with post
        return view('disposisi.edit', compact('disposisi'));
    }
        
  
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nomor'         => 'required',
            'unit'          => 'required',
            'tujuan'        => 'required',
            'posisi'        => 'required',
            'id_surat_disposisi'    => 'required',
            'id_surat_balasan'      => 'nullable'
        ]);

        //get post by ID
        $disposisi = Disposisi::findOrFail($id);

        //check if image is uploaded
        // if ($request->hasFile('image')) {

            //upload new image
            // $image = $request->file('image');
            // $image->storeAs('public/posts', $image->hashName());

            //delete old image
            // Storage::delete('public/posts/'.$surat->image);

            //update post with new image
            $disposisi->update([
                'nomor'         => $request->nomor,
                'unit'          => $request->unit,
                'tujuan'        => $request->tujuan,
                'posisi'        => $request->posisi,
                'no_disposisi'  => $request->no_disposisi,
                'id_surat_disposisi'    => $request->id_surat_disposisi,
                'id_surat_balasan'      => $request->id_surat_balasan
            ]);

        // } else {

            //update post without image
            // $surat->update([
            //     'title'     => $request->title,
            //     'content'   => $request->content
            // ]);
        // }

        //redirect to index
        return redirect()->route('disposisi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // /**
    //  * destroy
    //  *
    //  * @param  mixed $post
    //  * @return void
    //  */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $disposisi = Disposisi::findOrFail($id);

        //delete image
        // Storage::delete('public/surat/'. $surat->image);

        //delete post
        $disposisi->delete();

        //redirect to index
        return redirect()->route('disposisi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
