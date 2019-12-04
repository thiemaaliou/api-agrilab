<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersType;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class UsersTypeController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    try{
       $usersType = UsersType::get();
       return $this->successResponse($usersType, "Type d'utilisateurs");
    }catch(\Exception $e){
        Log::error($e->getMessage());
        return $this->errorResponse($e->getMessage());
    }
   
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
    try{
        DB::beginTransaction();
        $userType = new UsersType();
        $userType->name =  $request->name;
        $userType->save();
        Db::commit();
        return $this->successResponse($userType, "Type d'utilisateur ajouté avec succès");
    }catch(\Exception $e){
        DB::rollback();
        Log::error($e->getMessage());
        return $this->errorResponse($e->getMessage());
    }
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>