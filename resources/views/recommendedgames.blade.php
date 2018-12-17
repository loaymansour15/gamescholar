@extends('layouts.app') 

@section('content')
<br>

<form>
    @csrf
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <select id="inputState" class="form-control">
                                        <option selected>Category</option>
                                        <option>Programming</option>
                                        <option>Math</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <select id="inputState" class="form-control">
                                        <option selected>Genre</option>
                                        <option>Action</option>
                                        <option>Horror</option>
                                        <option>Romance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <select id="inputState" class="form-control">
                                        <option selected>Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
                                    <input type="number" class="form-control" id="inputState" min="6" max="21" placeholder="+ Age">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary btn-lg btn-block"> Filter </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="container">

    <div class="text-center">
        <br>
        <h2>Educational Games <span class="badge badge-pill badge-danger">are</span> <span class="badge badge-primary">Awesome</span></h2>
    </div>

    <hr>

    <div class="card">
        <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
                <tr>
                    <th class="text-left" scope="col">Game Information</th>
                    <th scope="col" width="120">Category</th>
                    <th scope="col" width="120">Rate</th>
                    <th scope="col" width="200" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <figure class="media">
                            <div class="rounded float-left" style="margin-right: 5px;"><img src="" class="img-thumbnail" width="100px" alt="image"></div>
                            
                            <figcaption class="media-body">
                                <h6 class="title text-truncate"> Name of the game </h6>
                                <dl class="param param-inline small">
                                    <dt>Age: </dt>
                                    <dd>+16</dd>
                                </dl>
                                <dl class="param param-inline small">
                                    <dt>Genre: </dt>
                                    <dd>Action</dd>
                                </dl>
                            </figcaption>
                        </figure>
                    </td>
                    <td>
                        <div class="price-wrap">
                            <var class="price">Programming</var>
                        </div>
                    </td>
                    <td>
                        <div class="price-wrap text-left">
                            <var class="price2"> 4.5</var>
                        </div>
                    </td>
                    <td class="text-center">
                        <a title="" href="" class="btn btn-outline-danger" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                        
                        <a href="" class="btn btn-outline-primary"><i class="fa fa-play"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- card.// -->

</div>
<!--container end.//-->
@endsection
