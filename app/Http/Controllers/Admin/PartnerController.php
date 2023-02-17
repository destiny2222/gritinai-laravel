<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partner  = Partner::orderBy('id', 'desc')->get();
        return view('admin.partner.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        //
        if($request->createpartner()){ 
            # code...
            Alert::success('success','Successful Added');
            return back();
        }                                                                                                                         
        Alert::error('error','An error occurred!');
        return back();
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
        try{
            $partner = Partner::findOrFail($id);
            return view('admin.partner.edit', compact('partner'));
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back();
        }
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
        try{
            $partner = Partner::findOrFail($id);
            $partner->update([
                'image'=>update_image('partner', $partner->image, 'image'),
                'name'=>$request->input('name'),
            ]);
            Alert::success('success', 'Updated Successful');
            return back();
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            Alert::error('error', 'Oops something went wrong');
              return back();
        }
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
        try{
            $partner = Partner::findOrFail($id);
            $partner->delete();
            Alert::success('success', 'Deleted Successful');
            return back();
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            Alert::error('error', 'Oops something went wrong');
              return back();
        }
    }
}
