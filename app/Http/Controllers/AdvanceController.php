<?php

namespace App\Http\Controllers;
use App\Models\Advance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {
        $items = DB::table('contacts')->get();
        // dd($items);
        return view('index',['items'=>$items]);
        // return view('/index');
    }

   public function confirm(Request $request)
    {
        $param = [
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion,
            //  'timestamp' => $request->timestamp,
        ];
        //
        
        DB::table('contacts')->insert($param);
        return redirect('/confirm');
        $validate_rule = [
            'fullname' => 'required',
            'gender' => 'integer|min:1|max:2',
            'email' => 'required|email',
            'postcode' => 'required',
            'address' => 'required',
            'building_name' => 'required',
            'opinion' => 'required',
        ];
        //
        $this->validate($request, $validate_rule);
        $from =$request->all();
        Advance::create($form);
       return view('confirm')->with($hash);
    }

    public function index()
    {
        $advance = Advance::all();
      return view('index')->with('users', $users);
    }

    public function complete()
    {
        return view('complete');
    }
}
