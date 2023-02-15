@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Billing'])
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Imagen del ave</h5>
                        <div class="row">
                            <div class="col-12">
                            <img class="w-100 border-radius-lg shadow-lg mt-3" src="https://images.pexels.com/photos/1098254/pexels-photo-1098254.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="bird_img">
                        </div>
                        <div class="col-12 mt-5">
                            <div class="d-flex">
                                <button class="btn btn-success mb-0 me-2" type="file" name="button">Subir archivo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="col-lg-8 mt-lg-0 mt-4">
            <div class="card">
              <div class="card-body">
                <h5 class="font-weight-bolder mb-3">Información del ave</h5>
                <div class="row">
                  <div class="col-6">
                    <label class="form-label">First Name</label>
                    <div class="input-group">
                      <input id="firstname" name="firstname" class="form-control" type="text" value="Admin" placeholder="Alec" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                      <div class="col-6">
                        <label class="form-label">Last Name</label>
                        <div class="input-group">
                          <input id="lastname" name="lastname" class="form-control" type="text" value="Admin" placeholder="Thompson" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                      </div>
                </div>
                <h5 class="font-weight-bolder mt-4">Area de observación</h5>
                <div class="row mt-3">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Vivero</label>
                      <input class="form-control" type="text" value="New York" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Vivero</label>
                      <input class="form-control" type="text" value="New York" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Antropica</label>
                      <input class="form-control" type="text" value="United States" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Cultivo</label>
                      <input class="form-control" type="text" value="437300" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Vivero</label>
                      <input class="form-control" type="text" value="New York" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Vivero</label>
                      <input class="form-control" type="text" value="New York" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Antropica</label>
                      <input class="form-control" type="text" value="United States" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-12 mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="font-weight-bolder">Socials</h5>
              <label>Shoppify Handle</label>
              <input class="form-control" type="text" placeholder="https://" onfocus="focused(this)" onfocusout="defocused(this)">
              <label class="mt-4">Facebook Account</label>
              <input class="form-control" type="text" placeholder="https://" onfocus="focused(this)" onfocusout="defocused(this)">
            
            </div>
          </div>
        </div>
        
      </div>
    </div>
@endsection