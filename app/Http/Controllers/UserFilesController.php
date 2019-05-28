<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\User;

class UserFilesController extends Controller
{
    public function index($userSlug)
    {
        $user = User::where('slug', $userSlug)->firstOrFail();
        $files = $user->files()->paginate(10);

        return view('public.userFiles.index',[
            'user'  => $user,
            'files' => $files
        ]);
    }
}
