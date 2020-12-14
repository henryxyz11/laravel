@extends('layouts.app')

@section('content')
    @include('layouts.headers.header',['title' => __('Kategori Barang')])

    <div class="container-fluid mt--7">
        @yield('content')
        <div class="row mt-5">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card shadow">
                    <div class="card-header border-0">
                    <div class="form-group mb-0">


            </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Kategori Barang</h3>
                            </div>



                            <div class="col text-right">

                                 <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus">&nbsp</i>Tambah Kategori</a>
                            </div>

                        </div>
                        <br>


                        <div class="col-lg-3 input-group input-group-alternative ">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control" placeholder="Search" type="text">
                </div>

                    </div>
                    <div class="table-responsive">

                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                <th >No</th>
                                <th >Kategori</th>
                                <th >Created at</th>
                                {{-- <th >Updated at</th> --}}
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $category)
                                <tr>
                                    <th scope="row">
                                        {{$loop->iteration}}
                                    </th>
                                    <td>
                                        {{$category->Kategori}}
                                    </td>
                                    <td>
                                        {{$category->created_at}}
                                    </td>
                                    {{-- <td>
                                        {{$category->updated_at}}
                                    </td> --}}
                                    <td>
                                        <form action="{{ route('kategori.destroy', $category->id) }}" class="pull-left"  method="post">
                                            <a href="{{route('kategori.edit','$category->')}}" class="btn btn-sm btn-success">Edit</a>
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        <button type="button" class="btn btn-sm btn-danger" onclick="confirm('{{ __("Are you sure you want to delete this catgory?") }}') ? this.parentElement.submit() : ''">
                                            {{ __('Delete') }}
                                        </button>
                                    </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$kategori->links()}}
                    </div>
                </div>
            </div>
            </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
