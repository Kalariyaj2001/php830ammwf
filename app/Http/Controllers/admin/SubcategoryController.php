<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubcategoryModel;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crudapp.admin.addsubcategory');
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
            "subcategoryname"=>"required"
        ]);

         // insert data in subcategories table
         date_default_timezone_set("Asia/Calcutta");
         $data=array(
             "subcategoryname"=>$request->subcategoryname
         );
 
         //elequent query builder using ORM(object relational mapping model)
         SubcategoryModel::create($data);
         //return view('crudapp.admin.addcategory');
         return redirect('admin-login/admin-addsubcategory')->with('success','Subcategory Added Successfully'); 
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=SubcategoryModel::all();
        return view('crudapp.admin.managesubcategory',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit from tablename where id='id';
        $ed=SubcategoryModel::where('id',$id)->first();
        return view('crudapp.admin.editsubcategory',["ed"=>$ed]);
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
            "subcategoryname"=>$request->subcategoryname
        );

        SubcategoryModel::where('id',$id)->update($ed);
        return redirect('admin-login/admin-managesubcategory')->with('upd','Your Subcategory Successfully Updated');
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
        SubcategoryModel::where('id',$id)->delete();
        return redirect('admin-login/admin-managesubcategory')->with('del','Your Subcategory Successfully Deleted');
    }
}
