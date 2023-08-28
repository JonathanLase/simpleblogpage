@extends('dashboard.layouts.main')

@section('container')
    <main class="col-lg-6 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Post Categories</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3 col-lg-6" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="table-responsive small">
            <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i class="bi bi-plus-circle-fill"></i>
                Create new
                category</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i
                                        class="bi bi-eye-fill"></i></a>
                                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i
                                        class="bi bi-pen-fill"></i></a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                        <i class="bi bi-x-circle-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
