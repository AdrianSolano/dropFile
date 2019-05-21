<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use App\Files;

class FilesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.files.index');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(FileRequest $request)
    {
        $file = $request->file('file');

        $files = Files::create([
            'user_id' => $request->user()->id,
            'uuid' => request('uuid'),
            'name' => request('name'),
            'descripcion' => request('descripcion'),
            'cover' => ($file ? $file->store('files', 'public') : null),
        ]);

        return redirect('/');
    }

}
