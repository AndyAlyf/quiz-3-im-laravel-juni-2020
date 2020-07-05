<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ItemController extends Controller
{
    public function create()
    {
        return view('artikel.create');
    }

    public function index()
    {   
        $items = ArticleModel::index();
        return view('artikel.index',compact('items'));
    }

    public function show($id)
    {   
        $item = ArticleModel::getById($id);
        return view('artikel.show',compact('item'));
    }

    public function edit($id)
    {   
        $item = ArticleModel::getById($id);
        // dd($item);
        return view('artikel.edit',compact('item'));
    }

    public function store(Request $request)
    {   
        $slug = strtolower(str_replace(' ','-',$request->judul)); 
        $data = [
            "judul" => $request->judul,
            "isi" => $request->isi,
            "slug" => $slug,
            "tag" => $request->tag,
            "penulis_id" => 3
        ];
        $new_item = ArticleModel::store($data);
        return redirect('/artikel');
    }

    public function update(Request $request)
    {   
        $slug = strtolower(str_replace(' ','-',$request->judul)); 
        $data = [
            "judul" => $request->judul,
            "isi" => $request->isi,
            "slug" => $slug,
            "tag" => $request->tag,
            "penulis_id" => 3
        ];
        $new_item = ArticleModel::update($data);
        return redirect('/artikel/'.$request->id);
    }

    public function destroy($id)
    {   
        $item = ArticleModel::destroy($id);
        // dd($item);
        return redirect("/artikel");
    }
}