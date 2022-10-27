<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function compact;
use function response;

class UserController extends Controller{
	/**
	 * Display a listing of the resource.
	 *
	 * @return JsonResponse
	 */
	public function index(){
		$users = User::with('group')
					 ->get();

		return response()->json(compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 *
	 * @return JsonResponse
	 */
	public function store(Request $request){

		$user = User::create($request->all());

		return response()->json([
									'status'  => true,
									'message' => 'User Has been created successfully!',
									'user'    => $user,
								]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param User $user
	 *
	 * @return JsonResponse
	 */
	public function show(User $user){
		return response()->json([
									'status'  => true,
									'message' => 'User Has been found successfully!',
									'user'    => $user::with('group')->find($user->id),
								]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param User $user
	 *
	 * @return Response
	 */
	public function edit(User $user){
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param User    $user
	 *
	 * @return JsonResponse
	 */
	public function update(Request $request, User $user){
		$user->update($request->all());

		return response()->json([
									'status'  => true,
									'message' => 'User has been updated successfully!',
									'user'    => $user,
								]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param User $user
	 *
	 * @return Response
	 */
	public function destroy(User $user){
		$user->delete();

		return response()->json([
									'status'  => true,
									'message' => 'User has been deleted!',
								]);
	}
}
