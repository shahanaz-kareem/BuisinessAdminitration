@extends('layouts.adminmaster')

@section('content')  

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Create New Role</h2>

        </div>

        <!-- <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>

        </div> -->

    </div>

</div>



@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>

    </div>

@endif
<section class="section">
           
                    <div class="card">
                        
                        <div class="card-header">
 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary pull-left" id="roleCreatemodal" data-toggle="modal" data-target="#permissionModal">
       Create new permission
        </button>

{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

       

                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Permissions
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="permissiontable">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Name</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1; @endphp
                                @foreach($permission as $value)
                                    <tr id="permission-row-{{$value->id}}">
                                        <td>{{$i++}}</td>
                                        <td><label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name form-check-input me-1')) }}

                                                {{ $value->name }}</label></td>
                                       
                                        <td>
                                        <a href="javascript:void(0);" class="deletepermission  @if($value->status == 0) d-none @endif" data-id="{{ $value->id }}" id="trash-{{$value->id}}">
                                            <span class="fa-fw select-all fas"></span>
                                        </a>
                                        
                                    </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

{!! Form::close() !!}



</section></div></div>


<!-- Modal -->
<div class="modal fade" id="permissionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Permission</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="permissionForm" action="">
            <div class="modal-body">
                <label for="permission">Enter New Permission</label>
                <input type="text" name="permission" class="form-control" id="permission" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancel-btn" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="launchModalBtn">Save changes</button>
            </div>
        </form>

    </div>
  </div>
</div>
@include('admin.roles.js')
@endsection
