@extends('admin.layouts.default')
@section('xyz')

  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          
          <li class="breadcrumb-item">Admin</li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Seller</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">       

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
            
              <!-- Bordered Tabs -->
              
                  <!-- Profile Edit Form -->
                   
                <form action="{{URL::to('update-seller/'.$seller->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                            <label class="control-label col-sm-2" for="name">name</label>
                            <div class="col-sm-10">
                            <input type="text"  name="name" class="form-control"  value="{{$seller->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">email</label>
                            <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" value="{{$seller->email}}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">phone</label>
                            <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control"  value="{{$seller->phone}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">address</label>
                            <div class="col-sm-10">
                            <input type="text" name="address" class="form-control"  value="{{$seller->address}}">
                            </div>
                        </div>
                    
                   
                   <div class="form-group">
                            <label class="control-label col-sm-2" for="name"></label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                   </div>
                                         

                           
                    </form><!-- End Profile Edit Form -->
                
             </div>
          </div>

        </div>
      </div>
    </section>

  </main>
 

  

</body>

</html>