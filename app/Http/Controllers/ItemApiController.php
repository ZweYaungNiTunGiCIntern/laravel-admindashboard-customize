<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
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
        $image=$request->image;
        $newName="gallery_".uniqid().".".$image->extension();
        $image->storeAs("public/gallery",$newName);

        $valid =Category::find($request->category_id);
        if($valid){

            $item = new Item();
            $item->name= $request->name;
            $item->price= $request->price;
            $item->category_id= $request->category_id;
            $item->expire_date = $request->expire_date;
            $item->image = $newName;
            $item->save();
            return response()->json([
                'success' => true,
                'message' => 'New item successfully added.'
            ]);
        }
        return response()->json("There is no category with this id");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Item::find($id);
        if($item){
            return response()->json($item);
        }
        return response()->json("Item not found");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Item::find($id);
        if($item){

            return response()->json($item);
        }
        return response()->json('Item not found');
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
        $image=$request->image;
        $newName="gallery_".uniqid().".".$image->extension();
        $image->storeAs("public/gallery",$newName);

        $valid =Category::find($request->category_id);
        if($valid){

            $item = new Item();
            $item->name= $request->name;
            $item->price= $request->price;
            $item->category_id= $request->category_id;
            $item->expire_date = $request->expire_date;
            $item->image = $newName;
            $item->update();
            return response()->json([
                'success' => true,
                'message' => 'New item successfully added.'
            ]);
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
        $item= Item::find($id);
        if($item){
            $item->delete();
            return response()->json('New item successfully deleted.');
        }
        return response()->json('Item not found');
    }
}
