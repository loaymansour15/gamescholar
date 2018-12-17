@extends('layouts.app')

@section('content')

<div class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <a href="{{ url('/') }}"> <img src="{{ asset('img/logo.png') }}" class="img-fluid" style="margin-bottom: 50px; height: 400px; width: auto;"> </a>
            </div>

            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                    {{ csrf_field() }}

                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="What do wanna play?">
                        </div>

                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <br>
        <span class="badge badge-secondary">OR</span>
        <br>
        <hr>
        
        <div class="row">
            <div class="col-12">
                <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Filter Your Search
                  </a>
            </div>
        </div>
        <br>
    
        <div class="collapse" id="collapseExample">
            <form>
                {{ csrf_field() }}
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="form-group ">
                            <select id="inputState" class="form-control">
                                <option selected>Category</option>
                                <option>Programming</option>
                                <option>Math</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group ">
                            <select id="inputState" class="form-control">
                                <option selected>Genre</option>
                                <option>Action</option>
                                <option>Horror</option>
                                <option>Romance</option>
                              </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="form-group ">
                            <select id="inputState" class="form-control">
                                <option selected>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group ">
                            <input type="number" class="form-control" id="inputState" min="6" max="21" placeholder="+ Age">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary btn-lg"> Filter </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
