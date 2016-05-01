<?php

namespace App\Http\Controllers;


use Illuminate\Filesystem\Filesystem;

class StaticController extends Controller
{
    public function index($nameView)
    {
        $files = new Filesystem();
        $view  = "html.{$nameView}";

        if (!$files->isFile(base_path("resources/views/html/{$nameView}.blade.php")))
            $view = "html.not-found";

        return view($view);
    }
}