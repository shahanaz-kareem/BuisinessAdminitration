@extends('layouts.adminmaster')

@section('content')  
<div class="row mb-4">
    <div class="col-md-6">
        <h2>Category Management</h2>
    </div>
    <div class="col-md-6 text-end">
        <a class="btn btn-success" href="{{ route('category.create') }}">Create New Category</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Category List</h4>
    </div>

    <div class="card-body">
        <table class="table table-striped" id="catTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 0; @endphp
                @foreach ($category as $cat)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>
                            <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('category.destroy', $cat->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.js.category-create')
@endsection
