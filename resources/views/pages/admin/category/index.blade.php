@extends('utils_admin.layout')

@section('body')
<h1 class="mt-4">Categories</h1>
<div class="container-fluid ">
    <div class="row p-0">
        <div class="col text-start">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">List categories</li>
            </ol>
        </div>
        <div class="col text-end">
            <a class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">Add Category</a>
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
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Created At</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $category->id }}">Edit</a>
                        <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $category->id }}">Del</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Modal Create --}}
@include('pages.admin.category.create-modal')
{{-- Modal Update --}}
@include('pages.admin.category.update-modal')
{{-- Modal Delete --}}
@include('pages.admin.category.delete-modal')
@endsection



