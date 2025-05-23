<?php

use Illuminate\Support\Facades\Auth;

function notification()
{
  $notifications = Auth::user()->notifications()->latest()->take(8)->get();

  return $notifications;
}