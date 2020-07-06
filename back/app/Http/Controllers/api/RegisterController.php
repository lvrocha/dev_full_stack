<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{

    public function index()
    {
        return Register::all();
    }

    public function store(Request $request)
    {
        Register::create($request->all());
    }

    public function show($id)
    {
        return Register::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $register = Register::findOrFail($id);
        $register->update($request->all());
    }

    public function destroy($id)
    {
        $register = Register::findOrFail($id);
        $register->delete();
    }
}
