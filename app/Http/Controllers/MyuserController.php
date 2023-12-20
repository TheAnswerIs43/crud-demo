<?php

namespace App\Http\Controllers;

use App\DatabaseJson\Models\Myuser;
use App\Http\Requests\StoreMyuserRequest;
use App\Http\Services\CRUDService;

class MyuserController extends Controller
{
  public function __construct(
    CRUDService $crudService
  )
  {
    $this->crud_service = $crudService;
  }

  public function index()
  {
    return view('pages.index', [
      'myusers' => Myuser::all()
    ]);
  }

  public function create()
  {
    return view('pages.create');
  }
  
  public function show($id)
  {
    return view('pages.show', [
        'user' => $this->crud_service->read($id)
    ]);
  }

  public function edit($id)
  {
    return view('pages.edit', [
      'user' => Myuser::find($id)
    ]);
  }

  public function store(StoreMyuserRequest $request)
  {
    $result = $this->crud_service->create($request);
    return redirect()->route('myuser.list')
        ->with('success_message', 'Utente creato con successo.');
  }

  public function update(StoreMyuserRequest $request, $id)
  {
    $result = $this->crud_service->update($request, $id);
    return redirect()->route('myuser.list')
      ->with('success_message', 'Utente aggiornato con successo.');
  }

  public function delete($id)
  {
    $result = $this->crud_service->delete($id);
    return redirect()->route('myuser.list')
      ->with('success_message', 'Utente eliminato con successo.');;
  }
}
