<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCategoryModel;

class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crudapp.admin.addcategory');
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
        //validation applied
        $request->validate([
            "categoryname"=>"required"
        ]);

        // insert data in categories table
        date_default_timezone_set("Asia/Calcutta");
        $data=array(
            "categoryname"=>$request->categoryname  
        );

        // elequent querybuilder using ORM
        AddCategoryModel::create($data);
        // return view('crudapp.admin.addcategory');
        return redirect('admin-login/admin-addcategory')->with('success','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddCategoryModel::all();
        return view("crudapp.admin.managecategory",["data"=>$data]);
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
        $ed=AddCategoryModel::Where('id',$id)->first();
        return view('crudapp.admin.editcategory',["ed"=>$ed]);
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
            "categoryname"=>$request->categoryname
        );

        AddCategoryModel::where('id',$id)->update($ed);
        return redirect('admin-login/admin-managecategory')->with('upd','Your Category Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data from tablename where id='id';
        AddCategoryModel::where('id',$id)->delete();
        return redirect('admin-login/admin-managecategory')->with('del','Your Category Successfully Deleted');
    }
}
