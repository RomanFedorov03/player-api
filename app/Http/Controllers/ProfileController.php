<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit(EditUserRequest $request)
    {
        $user = auth()->user();
        if (isset($request['avatar'])) {
            if ($user->avatar)
                Storage::delete("avatars/".$user->avatar);
            Storage::put("avatars", $request['avatar']);
        }
        $body = [];
        if (isset($request['name']))
            $body['name'] =  $request['name'];
        if (isset($request['login']))
            $body['login'] =  $request['login'];
        if (isset($request['password']))
            $body['password'] =  Hash::make($request['password']);
        if (isset($request['avatar']))
            $body['avatar'] =  $request['avatar']->hashName();

        $user->update($body);

        return [
            'user' => $user,
        ];
    }
}