<?php

namespace App\Http\Controllers;
use App\Models\Masage;
use App\Models\Contacts;
use App\Models\CallLog;
use App\Models\Image;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class UserPanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $userId = Auth::user()->id; // Replace with the user's ID
         $calllog = CallLog::where('user_id',$userId)->get();
         $itemcontcalllog=$calllog->count();
         $contact = Contacts::where('user_id',$userId)->get();
         $itemcontcontact=$contact->count();
        $sms = Masage::where('user_id',$userId)->get();
         $itemcontsms=$sms->count();
         $images = Image::where('user_id',$userId)->get();
         $itemcontimages=$images->count();
         return view('user.page.home',compact('itemcontimages','itemcontsms','itemcontcontact','itemcontcalllog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
