@extends('backend.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="/category/create" class="btn btn-success btn-sm">Add Category</a>
              </div>
              @if(session()->has('message'))
              <div class="alert alert-success">
               {{ session()->get('message') }}
                </div>
               @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($category as $c)
                  <tr>
                    <td>1</td>
                    <td>
                       {{$c->title}}
                    </td>
                    <td>{{$c->description}}</td>
                    <td>
                        <a href="/category/edit/{{$c->id}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/category/delete/{{$c->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
                  @endforeach
                
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection