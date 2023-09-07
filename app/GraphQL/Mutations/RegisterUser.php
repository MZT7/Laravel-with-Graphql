<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

final class RegisterUser
{
    /**
     * @param null $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        // $validator = Validator::make($args['input'], [
        //   'name' => 'required|string|max:255',
        //   'email' => 'required|email|unique:users,email',
        //   'password' => 'required|string|min:6',
        // ]);

        // if ($validator->fails()) {
        //     throw new ValidationException($validator);
        // }
        // return response()->json($args);
        $user = User::create([
            'name' => $args['name'],
            'email' => $args['email'],
            'password' => Hash::make($args['password']),
        ]);

        // event(new Registered($user));

        // return ["status"];
        // return response()->json(["status" => 'successful']);

        return $user;
    }
}
