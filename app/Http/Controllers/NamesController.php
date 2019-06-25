<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NamesController extends Controller
{
    public function index()
    {
        $filePath = public_path() . "/names.txt";        
        $names = $arr = file($filePath, FILE_IGNORE_NEW_LINES);

        return view('names.index', compact('names'));
    }

    public function create()
    {
        return view('names.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
        ]);

        $fileName = public_path() . "/names.txt";
        $name = $request->name;
        file_put_contents($fileName, PHP_EOL . $name, FILE_APPEND);

        return redirect()->action('NamesController@index');
    }

    public function show()
    {
        $filePath = public_path() . "/names.txt";        
        $names = file($filePath, FILE_IGNORE_NEW_LINES);
        $randomNames = array_rand(array_flip($names), 5);

        return view('names.show', compact('names', 'randomNames'));
    }
}
