<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

final class Logout
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        // $guard = Auth::guard('web');

        // $user = $guard->user();
        // $guard->logout();

        // return $user;

        $user = auth()->user()->tokens()->delete();


        return $user;
    }
}
