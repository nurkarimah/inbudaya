<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Class CobaController extends Controller
{
	public function hash(){
		$hashPassword = Hash::make('nur123');
		echo $hashPassword;
	} 
}