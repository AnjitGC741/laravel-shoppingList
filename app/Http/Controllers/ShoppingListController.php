<?php

namespace App\Http\Controllers;
use App\Models\shoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function index()
    {
        return view('welcome',['list'=>shoppingList::all()],['sn'=>1
    ]);
    }

    public function saveList(Request $req)
    {
        $todoObj = new shoppingList();
        $todoObj->tasks = $req->toBuy;
        $todoObj->save();
        return redirect('/');
    }
    public function delete($id)
    {
       $todoObj = shoppingList::find($id);
       $todoObj->delete();
       return redirect('/');

    }
    public function edit($id)
    {
        $data = shoppingList::find($id);
        return view('edit',['value'=>$data]);
        // return view('edit',['idValue'=>$id]);
    }
    public function updateTodo(Request $req)
    {
        $todoObj = shoppingList::find($req->id);
        $todoObj->tasks = $req->toBuy;
        $todoObj->save();
        return redirect('/');
    }
}
