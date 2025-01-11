@extends('layouts.adminmaster')

@section('content')  


            <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <div class="pull-right">

                        <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>

                        </div>
                        </div>
                        <div class="card-body">
                          <table class="table table-striped" id="userTable">
                                <thead>
                                    <tr>
                                    <th>No</th>

                                    <th>Name</th>

                                    <th>Email</th>

                                    <th>Roles</th>

                                    <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $key => $user)

                                  <tr>

                                    <td>{{ ++$i }}</td>

                                    <td>{{ $user->name }}</td>

                                    <td>{{ $user->email }}</td>

                                    <td>

                                      @if(!empty($user->getRoleNames()))

                                        @foreach($user->getRoleNames() as $v)

                                          <label class="badge badge-success" style="color:black;">{{ $v }}</label>

                                        @endforeach

                                      @endif

                                    </td>

                                    <td>

                                      <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                                      <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                        {!! Form::close() !!}

                                    </td>

                                  </tr>

                                @endforeach
                                    
                                    
                                </tbody>
                            </table>
                            </div>
                    </div>

                </section>

{!! $data->render() !!}




@endsection