<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;
use Illuminate\Support\Str;
use App\Penyakit;
use App\Gejala;
use App\Posts;
use App\Tags;
use App\Category;
use App\Http\Requests;


class PagesHomeController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()->paginate(3);

        $responeIndonesia = Http::get('https://api.kawalcorona.com/indonesia');
        $positfGlobal = Http::get('https://api.kawalcorona.com/positif');
        $sembuhGlobal = Http::get('https://api.kawalcorona.com/sembuh');
        $meninggalGlobal = Http::get('https://api.kawalcorona.com/meninggal');

        $indonesia = $responeIndonesia->json();
        $positif = $positfGlobal->json();
        $sembuh = $sembuhGlobal->json();
        $meninggal = $meninggalGlobal->json();


        return view('index', compact('posts', 'indonesia', 'positif', 'meninggal', 'sembuh'));
    }

    public function tabelPenyakit()
    {
        $penyakit = Penyakit::all();
        $gejalas = Gejala::all();
        return view('penyakit', compact('penyakit', 'gejalas'));
    }

    public function tabelGejala()
    {
        $gejala = Gejala::all();
        return view('gejala', compact('gejala'));
    }

    public function covidNasional()
    {

        $responeIndonesia = Http::get('https://api.kawalcorona.com/indonesia');
        $responeProvinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');

        $indonesia = $responeIndonesia->json();
        $provinsi = $responeProvinsi->json();


        return view('nasional', compact('indonesia', 'provinsi'));
    }

    public function covidInternasional()
    {

        $positfGlobal = Http::get('https://api.kawalcorona.com/positif');
        $sembuhGlobal = Http::get('https://api.kawalcorona.com/sembuh');
        $meninggalGlobal = Http::get('https://api.kawalcorona.com/meninggal');
        $responeGlobal = Http::get('https://api.kawalcorona.com/');

        $positif = $positfGlobal->json();
        $sembuh = $sembuhGlobal->json();
        $meninggal = $meninggalGlobal->json();
        $global = $responeGlobal->json();

        return view('internasional', compact('positif', 'meninggal', 'sembuh', 'global'));
    }

    public function artikelBerita()
    {
        $posts = Posts::latest()->paginate(6);
        return view('berita', compact('posts'));
    }

    public function show($id)
    {
        $category = Category::all();
        $tags = Tags::all();
        $post = Posts::findorfail($id);
        $posts = Posts::latest()->paginate(5);
        return view('detail', compact('post', 'tags', 'category', 'posts'));
    }

    public function pencegahan()
    {
        return view('pencegahan');
    }
}
