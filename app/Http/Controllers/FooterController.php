<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all();
        return view('contents.admin.profil', compact('footer'));
    }

    public function store(Request $request)
    {
        $footer = Footer::create([
            'judul' => $request->judul,
            'waktu_kerja' => $request->waktu_kerja,
            'media' => $request->media, 
        ]);
        dd($footer);
        return redirect()->back()->with('status', 'Berhasil Add data');
    }

    public function destroy(Request $request, $id)
    {
        $kategori = Footer::findOrFail($id);
        $kategori->delete();
        return redirect()->back()->with("success"," Berhasil Delete Data ! ");
    }

}
