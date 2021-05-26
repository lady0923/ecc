<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Test;

class EcctestController extends Controller
{
    public function add()
    {
        return view('admin.test.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Test::$rules);
        
        $test = new Test;
        $form = $request->all();
        
        unset($form['_token']);
        
        $test->fill($form);
        $test->save();
        
        return redirect('admin/ecc/testindex');
    }
    
    public function index(Request $request)
    {
        $posts = Test::all();
        return view('admin.test.index', ['posts' => $posts]);
    }
    
    public function edit(Request $request)
    {
        $test = Test::find($request->id);
        if (empty($test)) {
            abort(404);
        }
        return view('admin.test.edit', ['test_form' => $test]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Test::$rules);
        
        $test = Test::find($request->id);
        
        $test_form = $request->all();
        unset($test_form['_token']);
        
        $test->fill($test_form)->save();
        
        return redirect('admin/ecc/testindex');
    }
}
