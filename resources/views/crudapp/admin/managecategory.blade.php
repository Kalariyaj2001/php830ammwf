@extends('crudapp.admin.layout')

@section('titlename')
Manage All Category
@endsection 

@section('dashboard')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Manage Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Category</h5>

              <!-- flash message -->

            @if(Session('upd'))
            <div class="alert alert-success">
                <strong class="text-dark">Hey!</strong>{{session('upd')}}
            </div>  
            @endif


            @if(Session('del'))
            <div class="alert alert-danger">
                <strong class="text-dark">Hey!</strong>{{session('del')}}
            </div>  
            @endif
            
              <!-- Default Table -->
              <table class="table" id="tab1">
                
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">categoryname</th>
                    <th scope="col">created_date</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->categoryname}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>
                      <a href='{{URL("/admin-login/admin-managecategory/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure To Delete Data')"><i class="bi bi-trash3"></i></a> |

                      <a href='{{URL("/admin-login/admin-editcategory/".$row->id)}}' class="btn btn-sm btn-primary" onclick="return confirm('Are You Sure To Edit Data')"><i class="bi bi-pencil"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<script>
  $(document).ready(function () {
    $('#tab1').DataTable();
});
</script>

@endsection