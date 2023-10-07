<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
class ImageController extends Controller
{
   public function index(Request $request){
     $userId = Auth::user()->id; // Replace with the user's ID
if ($userId) {
  $images = Image::where('user_id',$userId)->get();
  $itemcont=$images->count();
   return view('user.page.image',compact('images','itemcont'));

    }
}
public function updateimage(){
    $userId = Auth::user()->id;
   DB::table('get_updates')->where('user_id', $userId)->update(array('image' => 1));  
   return redirect()->route('getimage')->with('success', 'ممکن است 1 یا چند دقیقه طول بکشد ');

}
}