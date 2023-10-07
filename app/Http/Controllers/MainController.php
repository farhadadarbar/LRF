<?php

namespace App\Http\Controllers;
use App\Models\Masage;
use App\Models\Contacts;
use App\Models\CallLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    public function indexcalllog(){
       $userId = Auth::user()->id; // Replace with the user's ID
if ($userId) {
  $calllog = CallLog::where('user_id',$userId)->get();
  $itemcont=$calllog->count();
   return view('user.page.calllog',compact('calllog','itemcont'));

    }

    }

    public function indexcontact(){
               $userId = Auth::user()->id; // Replace with the user's ID
if ($userId) {
  $contact = Contacts::where('user_id',$userId)->get();
  $itemcont=$contact->count();
   return view('user.page.contact',compact('contact','itemcont'));

    }
    }

    public function indexsms(){
       $userId = Auth::user()->id; // Replace with the user's ID
if ($userId) {
  $sms = Masage::where('user_id',$userId)->get();
  $itemcont=$sms->count();
   return view('user.page.sms',compact('sms','itemcont'));

    }
   
    }

    public function indexnotification(){}

    public function indexgps(){}

  public function updatecalllog(){
    $userId = Auth::user()->id;
   DB::table('get_updates')->where('user_id', $userId)->update(array('calllog' => 1));  
   return redirect()->route('getcalllog')->with('success', 'ممکن است 1 یا چند دقیقه طول بکشد ');

}
public function updatecontact(){
    $userId = Auth::user()->id;
   DB::table('get_updates')->where('user_id', $userId)->update(array('contact' => 1));  
   return redirect()->route('getcontact')->with('success', 'ممکن است 1 یا چند دقیقه طول بکشد ');

}
public function updatesms(){
    $userId = Auth::user()->id;
   DB::table('get_updates')->where('user_id', $userId)->update(array('sms' => 1));  
   return redirect()->route('getsms')->with('success', 'ممکن است 1 یا چند دقیقه طول بکشد ');

}

}
