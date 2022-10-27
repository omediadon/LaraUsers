<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function compact;
use function response;

class GroupController extends Controller{
	/**
	 * Display a listing of the resource.
	 *
	 * @return JsonResponse
	 */
	public function index(): JsonResponse{
		$groups = Group::with('users')
					   ->get();

		return response()->json(compact('groups'));
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
		$group = Group::create($request->all());

		return response()->json([
									'status'  => true,
									'message' => 'Group Has been created successfully!',
									'group'   => $group,
								]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param Group $group
	 *
	 * @return JsonResponse
	 */
	public function show(Group $group){
		return response()->json([
									'status'  => true,
									'message' => 'Group Has been found successfully!',
									'group'   => $group::with('users')
													   ->find($group->id),
								]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Group $group
	 *
	 * @return Response
	 */
	public function edit(Group $group){
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param Group   $group
	 *
	 * @return JsonResponse
	 */
	public function update(Request $request, Group $group){
		$group->update($request->all());

		return response()->json([
									'status'  => true,
									'message' => 'Group has been updated successfully!',
									'group'   => $group,
								]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Group $group
	 *
	 * @return JsonResponse
	 */
	public function destroy(Group $group){
		$group->delete();

		return response()->json([
									'status'  => true,
									'message' => 'Group has been deleted!',
								]);
	}
}
