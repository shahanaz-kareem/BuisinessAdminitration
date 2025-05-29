@extends('layouts.adminmaster')

@section('content')  

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Products Management</h2>

            </div>

            <div class="pull-right">

                @can('product-create')

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>

                @endcan

            </div>

        </div>

    </div>




    <div class="col-xs-12 col-sm-12 col-md-12">
    <section class="section">
                    <div class="card">
                        <div class="card-header">
                       
                        </div>
                        <div class="card-body">
    <table class="table table-striped" id="productTable">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

            <th width="280px">Status</th>
            @can('product-approval')
            <th width="280px">Approval action</th>
            @endcan
        </tr>

	    @foreach ($products as $product)

                <tr>

                    <td>{{ ++$i }}</td>

                    <td>{{ $product->name }}</td>

                    <td>{{ $product->detail }}</td>

                    <td>

                        <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="delete-product-form">

                            <a class="" href="{{ route('products.show',$product->id) }}"><span class="fa-fw select-all fas"></span></a>

                            @can('product-edit')

                            <a class="" href="{{ route('products.edit',$product->id) }}"><span class="fa-fw select-all fas"></span></a>

                            @endcan



                            @csrf

                            @method('DELETE')

                            @can('product-delete')

                            <button type="submit" class="product-delete-button"><span class="fa-fw select-all fas"></span></button>

                            @endcan

                        </form>

                    </td>
                
                    <td>
                        @switch($product->approval_status)
                            @case('approved')
                                <span class="badge bg-success">Approved</span>
                                @break

                            @case('pending')
                                <span class="badge bg-warning">Pending</span>
                                @break

                            @case('rejected')
                                <span class="badge bg-danger">Rejected</span>
                        @endswitch
                    </td>

                
                    @can('product-approval')
                    <td>
                   
                    @if($product->approval_status == 'pending')
                        <button  class="btn btn-success approveButton{{$product->id}}" data-status="approved" data-product="{{$product->id}}" id="approveButton">
                            Approve <span class="fa-fw select-all fas"></span>
                        </button>
                        <button class="btn btn-danger rejectButton{{$product->id}}" data-status="rejected"  data-product="{{$product->id}}" id="rejectButton">
                            Reject <span class="fa-fw select-all fas"></span>
                        </button>
                    @else
                        <p>Action not allowed</p>
                    @endif

                    
                       
                    </td>
                    @endcan
                </tr>

                @endforeach

            </table>

        </div>
                    </div>

                </section>
                </div>




@include('admin.js.product-index')
@endsection