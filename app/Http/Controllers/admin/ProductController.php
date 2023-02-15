<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crudapp.admin.addproduct');
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
           // validations applied here
           $request->validate([
            "productname"=>"required",
            "price"=>"required"
        ]);

         // insert data in contacts table
         date_default_timezone_set("Asia/Calcutta");
         $data=array(
             "productname"=>$request->productname,
             "price"=>$request->price
         );
 
         //elequent query builder using ORM(object relational mapping model)
         ProductModel::create($data);
         //return view('crudapp.admin.addproduct');
         return redirect('admin-login/admin-addproduct')->with('success','Product Added Successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=ProductModel::all();
        return view('crudapp.admin.manageproduct',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit from tablename where id='id';
        $ed=ProductModel::where('id',$id)->first();
        return view('crudapp.admin.editproduct',["ed"=>$ed]);
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
        $ed=array(
            "productname"=>$request->productname,
            "price"=>$request->price
        );

        ProductModel::where('id',$id)->update($ed);
        return redirect('admin-login/admin-manageproduct')->with('upd','Your Product successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete from tablename where id='id';
        ProductModel::where('id',$id)->delete();
        return redirect('admin-login/admin-manageproduct')->with('del','Your Product Successfully Deleted');
    }
}
