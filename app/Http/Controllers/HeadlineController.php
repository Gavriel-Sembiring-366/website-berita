<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;


class HeadlineController extends Controller
{
    public function welcome(Berita $berita)
    {
        $news = berita::all();
        $recents = Berita::latest()->take(4)->get();
        $internationals = Berita::where('jenis_berita', 'Internasional')->latest()->take(4)->get();
    
        return view('headline', [
            'news' => Berita::all(),
            'recent1' => $recents->get(0),
            'recent2' => $recents->get(1),
            'recent3' => $recents->get(2),
            'recent4' => $recents->get(3),
            'international1' => $internationals->get(0),
            'international2' => $internationals->get(1),
            'international3' => $internationals->get(2),
            'international4' => $internationals->get(3),
        ]);
    }

    public function index()
    {
        return berita::all();
    }

    public function test()
    {
        return view('test');
    }
 
    public function show($id)
    {
        // return view('welcome', ['news' => berita::find($id)]);
    }

    public function store(Request $request)
    { 
        
    }

    public function update(Request $request, $id)
    {
        $berita = berita::findOrFail($id);
        $berita->update($request->all());

        return $berita;
    }

    public function delete(Request $request, $id)
    {
        $berita = berita::findOrFail($id);
        $berita->delete();

        return 204;
    }
}
