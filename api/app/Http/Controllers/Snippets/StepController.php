<?php

namespace App\Http\Controllers\Snippets;

use App\Http\Controllers\Controller;
use App\Models\Snippet;
use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function update(Snippet $snippet, Step $step, Request $request)
    {
        // authorize!

        $step->update($request->only('title', 'body'));
    }
}
