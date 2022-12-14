@extends('layout.admin')
@push('css')
@endpush
@section('content')

    <head>
        @include('layout.css')
    </head>

    <body>


        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>slider</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Tables</a></li>
                                <li><a href="#">DataTables</a> </li>
                                <li class="active"><a href="#">Basic</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>slider</h4>
                                    </div>
                                    <div>
                                        <a href="/tambahslider" class="btn btn-primary " id="kt_account_profile_details_submit"
                                            style="margin-left: 30px;">Tambah
                                            +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">

                                    <table id="ecommerce-product-list" class="table  table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Foto Slider</th>
                                                <th scope="col">Aksi</th>
                                            </tr>

                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $d)
                                                <tr>
                                                    <th>{{ $no++ }}</th>
                                                    <td>{{ $d->deskripsi }}</td>
                                                    <td>
                                                        <img src="{{ asset('fotomahasiswa/' . $d->foto) }}" alt=""
                                                            style="width: 50px;">
                                                    </td>
                                                    <td class="align-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a href="/editslider/{{ $d->id }}" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit">
                                                                    <i class="flaticon-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="delete fire"
                                                                    data-id="{{ $d->id }}"
                                                                    data-nama="{{ $d->nama_team }}" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete">
                                                                    <i class="flaticon-delete-5"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('layout.script')




    </body>
    <script>
        $('.delete').click(function() {
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');


            swal({
                    title: "Apa kamu yakin ingin menghapus data ini?",
                    text: "Kamu akan menghapus data dengan nama team " + nama + "! ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deleteslider/" + id + ""
                         swal("Data berhasil dihapus!", {
                           icon: "success",
                         });
                    } else {
                        swal("Data tidak jadi dihapus!");
                    }
                });
        });
    </script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>\

@endsection
