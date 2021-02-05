<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseApiController;
use App\Http\Controllers\Api\QueryFilters\UserQueryFilter;
use App\User;
use Illuminate\Support\Facades\Validator;
use Auth;
use Carbon\Carbon;

class UserApiController extends BaseApiController
{
    public function index()
    {
        return User::all();
    }

    public function signup(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function userDatatable(Request $request)
    {
        $userQueryFilter = new UserQueryFilter($request->all());
        $userQuery = User::orderBy('id', 'ASC');
        if ($userQueryFilter->get_search_text() != null) {
            $userQuery = $userQuery->where("name", "like", "%" . $userQueryFilter->get_search_text() . "%");
        }
        $count = (clone $userQuery)->count();
        $result = $userQuery->limit($userQueryFilter->get_length())->offset($userQueryFilter->get_start());
        $data_get = $result->get();
        $data = $this->set_datatable_response($userQueryFilter->get_draw(), $count, $result->get());
        return $this->success_response_datatable();
    }
}
