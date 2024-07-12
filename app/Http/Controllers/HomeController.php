<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index(Request $request)
    {
        $keywords = $request->keyword;
        $users = User::when((!empty($keywords)),function($query) use($keywords){
            $searches = explode(" ",$keywords);
            foreach ($searches as $key => $search)
            {
                if($key == 0)
                {
                    $query->where('Name->first','ILIKE','%'.$search.'%');
                }else{
                    $query->orWhere('Name->first','ILIKE','%'.$search.'%');
                }
                $query->orWhere('Name->last','ILIKE','%'.$search.'%');
                $query->orWhere('Name->title','ILIKE','%'.$search.'%');
                $query->orWhere('Gender',$search);

                if(is_numeric($search))
                {
                    $query->orWhere('age','ILIKE',$search);
                }
            }
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);
        return view('public.index',compact('users'));
    }

    function edit($uuid,Request $request)
    {
        $user = User::where('uuid',$uuid)->first();
        return view('public.edit',compact('user'));
    }

    function update($uuid,UpdateUserRequest $request)
    {
        $name = [
            'first' => $request->first,
            'last'  => $request->last,
            'title' => $request->title
        ];

        $location = [
            'city'          => $request->city,
            'state'         => $request->state,
            'street'        => [
                'name'          => $request->street_name,
                'number'        => $request->street_number,
            ],
            'country'       => $request->country,
            'postcode'      => $request->postcode,
            'timezone'      => [
                'offset'        => $request->timezone_offset,
                'description'   => $request->timezone_description
            ],
            'coordinates'   => [
                'latitude'      => $request->latitude,
                'longitude'     => $request->longitude,
            ]
        ];


        User::where('uuid',$uuid)
        ->update([
            'Gender'    => $request->gender,
            'Name'      => json_encode($name),
            'Location'  => json_encode($location),
            'age'       => $request->age,
        ]);

        return redirect()->back();
    }

    function delete($uuid)
    {
        User::where('uuid',$uuid)->delete();
        return redirect()->back();
    }
}
