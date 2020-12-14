@extends('layouts.app')

@section('content')
    @include('layouts.headers.header',['title' => __('Barang Pinjam')])

    <div class="container-fluid mt--7">
        <div class="row mt-5">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card shadow">
                    <div class="card-header border-0">
                    <div class="form-group mb-0">
                    
                
            </div>
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Barang Kembali</h3>
                            </div>
            
            
        
                            {{-- <div class="col text-right">
                                
                                 <a href="#!" class="btn btn-sm btn-primary"><i class="fas fa-book">&nbsp</i>Form Pinjam</a>
                            </div> --}}
                            
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
                                <th >Kode Barang</th>
                                    <th >Nama Peminjam</th>
                                    <th >Unit</th>
                                    <th >Nama Barang</th>
                                    {{-- <th >Stock</th> --}}
                                    <th >Tanggal Pinjam</th>
                                    <th >Tanggal Kembali</th>
                                    {{-- <th >Status</th> --}}
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">

                                    </th>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td></td>
                                </tr>


                            </tbody>
                        </table>
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
