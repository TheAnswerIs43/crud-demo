<?php

namespace App\Http\Services;

use App\Http\Requests\StoreMyuserRequest;
use App\DatabaseJson\Models\Myuser;

class CRUDService
{
    public function create(StoreMyuserRequest $request){
        $validated = $request->validated();
        $validated['name'] = ucfirst($validated['name']);
        $validated['surname'] = ucfirst($validated['surname']);
        return Myuser::create($request->validated());
    }

    public function read($id){
        return Myuser::find($id);
    }

    public function update(StoreMyuserRequest $request, $id) {
        $validated = $request->validated();
        $validated['name'] = ucfirst($validated['name']);
        $validated['surname'] = ucfirst($validated['surname']);
        return Myuser::update($validated, $id);
    }

    public function delete($id){
        $myuser = Myuser::find($id);
        if(!$myuser){
            return false;
        }
        return $myuser->delete();
    }
}