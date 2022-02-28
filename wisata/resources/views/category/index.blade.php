@extends('layouts.app')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p>A free and open source Bootstrap 4 admin template</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div class="row col-12">
            <div class="tile col-12 mb-4">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="mb-3 line-head" id="buttons">List Kategori
                                <a href="{{ route('category.create') }}"
                                    class="pull-right btn btn-md btn btn-success">Tambah Data</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a class="btn btn-md btn-warning"
                                        href="{{ route('category.edit', $category->id) }}">Edit</a>
                                    ||
                                    <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-md btn-danger"
                                        href="{{ route('category.destroy', $category->id) }}">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-danger text-center">There is no data</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
