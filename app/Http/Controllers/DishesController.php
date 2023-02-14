<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Dish;


class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('menu.index')->with('dishes', $dishes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dishName'=>'required',
            'dishPrice'=>'required',
            'dishCategory'=>'required',
            'dishDescription'=>'required',
            'dishImage'=>'required|mimes:jpg,png,jpeg',
        ],[
            'dishName.required' => 'Please enter a valid name for the dish !',
            'dishPrice.required' => 'Please enter the price !',
            'dishCategory.required' => 'Enter a Category !',
            'dishDescription.required' => 'Enter a description !',
            'dishImage.required' => 'Please select an image !',
        ]);

        $plat_image = $request->file('dishImage');         
        $name_gen = hexdec(uniqid());         
        $img_ext = strtolower($plat_image->getClientOriginalExtension());         
        $img_name = $name_gen.'.'.$img_ext;         
        $location = 'images/';         
        $last_img = $location.$img_name;         
        $plat_image->move($location,$img_name);


        Dish::create([
            'image_path'=> $last_img,
            'name'=>$request->dishName,
            'price'=>$request->dishPrice,
            'Category'=>$request->dishCategory,
            'description'=>$request->dishDescription,
        ]);
        return redirect('/menu')->with('success','Dish has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dish = Dish::find($id);
        return view('menu.show')->with('dishes', $dish);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dish = Dish::find($id);
        return view('menu.edit')->with('dishes', $dish);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dish = Dish::find($id);
        if($request->hasFile('dishImage')){
            $plat_image = $request->file('dishImage');         
            $name_gen = hexdec(uniqid());         
            $img_ext = strtolower($plat_image->getClientOriginalExtension());         
            $img_name = $name_gen.'.'.$img_ext;         
            $location = 'images/';         
            $last_img = $location.$img_name;         
            $plat_image->move($location,$img_name);
            $dish->update([
                'image_path'=> $last_img,
            ]);

        }
        $request->validate([
            'dishName'=>'required',
            'dishPrice'=>'required',
            'dishCategory'=>'required',
            'dishDescription'=>'required',
        ],[
            'dishName.required' => 'Please enter a valid name for the dish !',
            'dishPrice.required' => 'Please enter the price !',
            'dishCategory.required' => 'Enter a Category !',
            'dishDescription.required' => 'Enter a description !',
        ]);
        $dish->update([
            'name'=>$request->dishName,
            'price'=>$request->dishPrice,
            'Category'=>$request->dishCategory,
            'description'=>$request->dishDescription,
        ]);
        return redirect('/menu')->with('success','Dish Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dish = Dish::destroy($id);
        return redirect('/menu')->with('success','Dish has been deleted successfully');
    }
}
