<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalController extends Controller
{
   public function cookies()
   {
       return view('public.legal.cookies');
   }

   public function privacy()
   {
       return view('public.legal.privacy');
   }

   public function conditions()
   {
       return view('public.legal.conditions');
   }

}
