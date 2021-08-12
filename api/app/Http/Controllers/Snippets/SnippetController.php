<?php

namespace App\Http\Controllers\Snippets;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SnippetController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function store(Request $request)
    {
        $snippet = $request->user()->snippets()->create();

        dd($snippet);
    }
}
