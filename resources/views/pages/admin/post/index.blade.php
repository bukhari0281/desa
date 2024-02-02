@extends('utils_admin.layout')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

@section('title', 'List Posts - Admin')

@section('body')
<h1 class="mt-4">Posts</h1>
<div class="container-fluid ">
    <div class="row p-0">
        <div class="col text-start">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">List post</li>
            </ol>
        </div>
        <div class="col text-end">
            <a class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">Add new post</a>
        </div>
      </div>
</div>

<div class="mt-3">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif
    <table class="table table-striped table-bordered" id="dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Category</th>
                <th>Views</th>
                <th>Status</th>
                <th>Publish Date</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->Category->name }}</td>
                    <td>{{ $item->views }}</td>

                        @if ($item->status == 0)
                            <td class="text-danger">Draft</td>
                        @else
                            <td class="text-success">Published</td>
                        @endif

                    <td>{{ $item->publish_date }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Detail</a>
                        <a href="#" class="btn btn-sm btn-outline-warning text-dark" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</a>
                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">Del</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#dataTable');
    </script>
@endpush

