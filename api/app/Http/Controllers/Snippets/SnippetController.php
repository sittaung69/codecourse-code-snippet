<?php

namespace App\Http\Controllers\Snippets;

use App\Models\Snippet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\Snippets\SnippetTransformer;

class SnippetController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api'])
            ->only('store');
    }

    public function show(Snippet $snippet)
    {
        // authorize!

        return fractal()
            ->item($snippet)
            ->transformWith(new SnippetTransformer())
            ->parseIncludes([
                'steps',
                'author',
                'user'
            ])
            ->toArray();
    }

    public function store(Request $request)
    {
        $snippet = $request->user()->snippets()->create();

        dd($snippet);
    }
}
