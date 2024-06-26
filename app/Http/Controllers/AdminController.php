<?php

namespace App\Http\Controllers;

use App\Models\NhatroImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Nhatro;


class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user_type = Auth()->user()->user_type;
            if ($user_type == 'user') {
                return view('home.index');
            } else if ($user_type == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }
    public function home()
    {
        return view('home.index');
    }

    public function dashboard()
    {
        return view('admin.dashboard.index');
    }

    public function nhatro()
    {
        $nhatros = Nhatro::all();
        return view('admin.nhatro.index', compact('nhatros'));
    }

    public function create_nhatro(Request $request)
    {
        return view('admin.nhatro.create');
    }

    public function add_nhatro(Request $request)
    {
        $data = new Nhatro;

        if ($request->hasFile('images')) {
            $count = 1;
            foreach ($request->file('images') as $image) {
                $name = $request->name . $count++ . '.' . $image->extension();
                $image->move(public_path() . '/images/nhatro/', $name);
                $n_data[] = '/images/nhatro/' . $name;
            }
            $data->images = json_encode($n_data);
        }


        $data->name = $request->name;
        $data->acreage = $request->acreage;
        $data->price = $request->price;
        $data->n_floor = $request->n_floor;
        $data->n_room = $request->n_room;
        $data->room_in_floor = $request->room_in_floor;
        $data->address = $request->address;
        $data->status = $request->status;
        $data->description = $request->description;

        $data->save();



        return redirect()->back()->with('Success', 'Upload successfully!');
    }

    public function show_nhatro($id)
    {
        $nhatro = Nhatro::find($id);
        if (!$nhatro) {
            return response()->json(['error' => 'Contact not found'], 404);
        }

        return response()->json($nhatro);
    }

    public function delete_nhatro($id)
    {
        $nhatro = Nhatro::find($id);
        $nhatro->delete();
        return redirect()->route('nhatro')->with('success', 'Deleted Successfully');
    }
}
