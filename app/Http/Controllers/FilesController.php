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
        $this->middleware('auth', [
            'only' => ['create', 'store', 'edit', 'update', 'destroy']
        ]);
        $this->middleware('can:touch,file', [
            'only' => ['edit', 'update', 'destroy']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = Files::with('user')->get();
        return view('public.files.index')->with('files', $file);
        
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

        Files::create([
            'user_id' => $request->user()->id,
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'descripcion' => request('descripcion'),
            'file' => $file->store('file','public'),
        ]);

        return redirect('/');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        $file = Files::where('slug', $slug)->firstOrFail();

        return view('public.files.show', ['file' => $file]);
    }
}
