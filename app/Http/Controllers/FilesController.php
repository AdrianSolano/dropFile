<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use App\Files;

class FilesController extends Controller
{
    /* 
    * Construct/middleware
    */
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
     * Lista de archivos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = Files::with('user')->get();
        return view('public.files.index')->with('files', $file);
        
    }

     /**
     * Crear/Form del archivo
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.files.create');
    }

    /**
     * Store del archivo
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
     * Show del archivo
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        $file = Files::where('slug', $slug)->firstOrFail();

        return view('public.files.show', ['file' => $file]);
    }

     /**
     * Edit del archivo
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $file)
    {
        return view('public.files.edit', ['file' => $file]);
    }

     /**
     * Update del edit del archivo
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FileRequest $request,Files $file)
    {
        $file = $request->file('file');

        $file->update([
            'name' => request('name'),
            'slug' => str_slug(request('name'), "-"),
            'descripcion' => request('descripcion'),
            'file' => $file->store('archivos','public'),
        ]);

        return redirect('/files/'.$file->slug);
    }

    /**
     * Eliminar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $file)
    {
        $file->delete();

        return redirect('/');
    }

}
