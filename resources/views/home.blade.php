@extends('layout')

@section('title','Home')

@section('after-css')

@endsection

@section('main-content')
    <div class="container">

        <h1 class="mt-5 text-center"> List</h1>

        <div class="table-responsive">
            <div class="w-25 text-right">

                <form action="{{ route('book')}}" method="post" class="d-flex justify-content-center ">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="search" class="form-control" id="search" placeholder="...">
                        <label for="search">Search</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary ms-2">Search</button>

                    </div>

                </form>
                @if(session('err_search'))
                    <p class="text-danger">{{ session('err_search') }}</p>
                @endif
            </div>

            <table class="table customize-table v-middle">
                <thead class="table-dark">
                <tr>
                    <th>BookID</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>ISBN</th>
                    <th>Public Year</th>
                    <th>Available</th>
                </tr>
                </thead>
                <tbody>
                @foreach($book as $b)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="ms-3 fw-normal">{{ $b->id }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="ms-3 fw-normal">{{ $b->name }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="ms-3 fw-normal">{{ $b->Author->name }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="ms-3 fw-normal">{{ $b->title }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="ms-3 fw-normal">{{ $b->ISBN }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="ms-3 fw-normal">{{ $b->pub_year }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="ms-3 fw-normal">{{ $b->available }}</span>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('after-js')

@endsection
