<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use App\Http\Requests\StoreMyuserRequest;
use App\Http\Services\CRUDService;
use Exception;

class ApiController extends Controller
{
  public function __construct(
    CRUDService $crudService
  )
  {
    $this->crud_service = $crudService;
  }

  public function create(StoreMyuserRequest $request){
    return Response::json([
      'user' => $this->crud_service->create($request)->toArray()
    ], 201);
  }

  public function read($id){
    try{
      $myuser = $this->crud_service->read($id);
      if(!$myuser){
        throw new Exception('User not found');
      }
      return Response::json([
        'user' => $this->crud_service->read($id)->toArray()
      ], 200);
    } catch(Exception $e){
        return Response::json([
          'error' => 'user not found'
        ], 404);
    }
  }

  public function update(StoreMyuserRequest $request, $id){
    return Response::json([
      'updated' => $this->crud_service->update($request, $id)
    ], 200);
  }

  public function delete($id){
    return Response::json([
      'deleted' => $this->crud_service->delete($id)
    ], 200);
  }
}
