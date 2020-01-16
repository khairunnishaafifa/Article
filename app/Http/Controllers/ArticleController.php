<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function __construct(Article $article)
    {
        $this->table = $article;
    }

    public function index()
    {
        $list = $this->table->getAll();

        return response()->json($list);
    }

    public function store()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
