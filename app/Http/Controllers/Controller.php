<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    	/**
	 *
	 * @param array $data        	
	 * @return 
	 */
	public static function successResponse($data = null, $message = null) {
	    return response()->json ( [ 
				'code' 	  => JsonResponse::HTTP_OK,
				'message' => $message,
				'data' 	  => $data,
				'error'   => false 
		], JsonResponse::HTTP_OK );
	}
	/**
	 * 
	 * @param string  $errorMes
	 * @param number $code
	 * @return Object
	 */
	public static function errorResponse($errorMes, $code = 404) {
	    return response()->json([ 
				'code' => $code,
				'message' => $errorMes ,
				'data' => null,
				'error' => true
		], $code );
	}
}
