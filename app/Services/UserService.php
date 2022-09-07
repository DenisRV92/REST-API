<?php

namespace App\Services;


use App\Models\User;

class UserService
{

    /**
     * @param $request
     * @return bool
     */
    public function register($request)
    {
        $input = $request->all();
        $user = new User($request->all());
        return $user->save();
    }

    /**
     * @param $user
     * @param $request
     * @return mixed
     */
    public function update($user, $request)
    {
        $data = $request->all();
        if (isset($data['name'])) {
            $user->name = $data['name'];
        }
        if (isset($data['username'])) {
            $user->username = $data['username'];
        }
        return $user->save();
    }

}
