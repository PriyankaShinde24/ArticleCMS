<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\User;
use App\Models\Articles;
use App\Models\Comment;
use App\Models\ArticleTag;
use App\Models\Tag;

use Response;

class ArticleAPIController extends AppBaseController
{
    public function articleListing(Request $request){
        $input = $request->all();        
        
        if (!isset($input['searchText'])) {
            $articles = \App\Models\Articles::latest()->get();
        }else {
            $articles = \App\Models\Articles::where('title', 'LIKE', '%'.$input['searchText'].'%')->orwhere('description', 'LIKE', '%'.$input['searchText'].'%')->get();
        }
        return response()->json(['articles' => $articles], 200);
    }
    
    public function store(Request $request)
    {        
        $article = Articles::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        
        return response()->json(['success' => 'Article saved'], 200);
        
    }
    
     public function show($article_id){
        $article = \App\Models\Articles::find($article_id);
        return response()->json(['post' => $article], 200);
    }
    
}
