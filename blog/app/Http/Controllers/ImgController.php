<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImgRequset;
class ImgController extends Controller
{
public function ImgSubmit (ImgRequset $req){
$path = $req->file('img')->store('uploads', 'public');
    $pa = $req->file('img');
return view('about', ['path'=> $path]);
}





}
