<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    public function index()
    {
        return inertia('Task/Task');
    }
}
