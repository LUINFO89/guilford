@extends('layouts.template')

@section('content')

<div class="content">
    <div class="row m-0" >
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container text-center">
                        <div class="row">
                          <div class="col">
                            
                            <div class="card border-danger mx-sm-1 p3">
                            
                                <div class="text-danger text-center mt-3"><h4>Usuarios Creados: {{ Auth::user()->count() }}</h4></div>
                                <a href="{{ route('usuarios.index') }}" >
                                    <i class="nc-icon nc-satisfied"></i>
                                    <p>Usuarios</p>
                                  </a>
                            </div>
                          </div>
                          <div class="col">
                            
                            <div class="card border-danger mx-sm-1 p3">
                            
                                <div class="text-danger text-center mt-3"><h4> Grados </h4></div>
                                    <a href="{{ route('grados.index') }}" >
                                      <i class="nc-icon nc-badge"></i>
                                      <p>Grados</p>
                                    </a>
                                  
                            </div>
                          </div>
                          <div class="col">
                            
                            <div class="card border-danger mx-sm-1 p3">
                            
                                <div class="text-danger text-center mt-3"><h4>Solicitudes </h4></div>
                                <a href="{{ route('solicitudes.index') }}" >
                                    <i class="nc-icon nc-bullet-list-67"></i>
                                    <p>Solicitudes</p>
                                  </a>
    
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-globe text-warning"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Capacity</p>
                                      <p class="card-title">150GB<p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-refresh"></i>
                                  Update Now
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-money-coins text-success"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Revenue</p>
                                      <p class="card-title">$ 1,345<p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-calendar-o"></i>
                                  Last day
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-vector text-danger"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Errors</p>
                                      <p class="card-title">23<p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-clock-o"></i>
                                  In the last hour
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Followers</p>
                                      <p class="card-title">+45K<p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-refresh"></i>
                                  Update now
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                   

                    
                </div>
            </div>

        </div>
    </div>
</div>


@endsection