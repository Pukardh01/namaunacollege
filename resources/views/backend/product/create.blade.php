@extends('backend.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Category</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              {{-- error message --}}
              @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <div class="ml-3"><p style="color:red;">{{$error}}<p></div>
              @endforeach
          @endif
          {{--/error message  --}}

          {{-- success message --}}
          @if(session()->has('message'))
            <div class="alert alert-success">
             {{ session()->get('message') }}
              </div>
             @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/product/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control"  id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control"  id="exampleInputEmail1" placeholder="Enter title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
              
                        <label>Select</label>
                        <select class="form-control" name="category_id">
                          <option disabled>Select your Category</option>
                          @foreach ( $category as $item)
                          <option value="{{$item->id}}">{{$item->title}}</option>
                         
                          @endforeach
                       
                     
                        </select>
                       
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand</label>
              
                        <label>Select</label>
                        <select class="form-control" name="brand_id">
                          <option disabled>Select your Brand</option>
                          @foreach ( $brand as $item)
                          <option value="{{$item->id}}">{{$item->title}}</option>

                         
                          @endforeach
                       
                     
                        </select>
                      
                  </div>

            

                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="price" class="form-control"  id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input type="text" name="quantity" class="form-control"  id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Color</label>
                    <input type="text" name="color" class="form-control"  id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Size</label>
                    <input type="text" name="size" class="form-control"  id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="text" name="stock" class="form-control"  id="exampleInputPassword1" placeholder="Description">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> --}}
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection