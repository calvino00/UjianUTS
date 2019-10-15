<?php

namespace App\Http\Controllers;
use App\uts as utsModel;
use App\Repository\utsInterface;
use App\Repository\utsRepository;

use Illuminate\Http\Request;

class uts extends Controller
{
    private $utsRepo;

    public function __construct(utsRepository $repo)
    {
        $this->utsRepo = $repo;
    }

    public function index()
    {
        $todos = utsModel::all();
        return view('index', ['uts' => $todos]);
    }
    public function new_form()
    {
        return view('uts.new');
    }

    public function save(Request $request)
    {
        $todo = new utsModel;
        $todo->nama = $request->nama;
        $todo->telepon = $request->telepon;
        $todo->email = $request->email;
        $todo->alamat = $request->alamat;
        $todo->save();
        return redirect(route('utsIndex'));
    }

    public function delete(int $id)
    {
        $this->utsRepo->delete($id);
        return redirect(route('utsIndex'));
    }

    public function detail(int $id){
        $todo = $this->utsRepo->get($id);
        if ($todo == null){
            abort(404);
        }
        return view('todo.detail',
                     ['todo'=>$todo]);

    }

    public function edit(int $id){
        $todo = utsModel::findOrFail($id);
        return view('uts.edit',
                    ['uts'=>$todo]);
    }

    public function update(Request $request){
        $newuts = new utsModel();
        $newuts->nama = $request->input('nama');
        $newuts->telepon = $request->input('telepon');
        $newuts->email = $request->input('email');
        $newuts->alamat = $request->input('alamat');
        $this->utsRepo->update($request->id,$newuts);
        return redirect(route('utsIndex'));
    }

    public function search(\Illuminate\Http\Request $request)
{
    $kontak = utsModel::when($request->keyword, function ($query) use ($request) {
        $query->where('nama', 'like', "%{$request->keyword}%");
            
    })->get();
    //return redirect(route('utsIndex'));
    return view('index', ['uts'=>$kontak]);
}


}

