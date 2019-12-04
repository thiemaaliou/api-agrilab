<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
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
        $user = new User();
        $user->firstname =  $request->firstname;
        $user->lastname =  $request->lastname;
        $user->address =  $request->address;
        $user->login =  $request->login;
        $user->phone =  $request->phone;
        $user->password =  Hash::make($request->password);
        $user->save();
        Db::commit();
        return $this->successResponse($user, "Utilisateur ajouté avec succès");
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