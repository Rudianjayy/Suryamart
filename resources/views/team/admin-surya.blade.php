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
                        <h3>Zero Configuration</h3>
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

                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Style 3</h4>
                                    </div>
                                </div>
                                <div>
                                    <a href="/tambahteam" class="btn btn-primary " id="kt_account_profile_details_submit"
                                        style="margin-left: 30px;">Tambah
                                        +</a>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="customer-info-detail-3" class="table style-3 table-bordered  table-hover">

                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> # </th>
                                                <th class="align-center">Foto Team</th>
                                                <th>Jabatan</th>
                                                <th>Nama Team</th>
                                                <th>Link Facbook</th>
                                                <th>Link WhatsApp</th>
                                                <th>Link Instagram</th>
                                                {{-- <th class="align-center">Status</th> --}}
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data2 as $d2)
                                                <tr>
                                                    <td class="checkbox-column text-center"> {{ $no++ }} </td>
                                                    <td class="align-center">
                                                        <span><img src="{{ asset('fotosuryamart/' . $d2->foto_team) }}"
                                                                class="" alt="profile"></span>
                                                    </td>
                                                    <td>{{ $d2->jabatan }}</td>
                                                    <td>{{ $d2->nama_team }}</td>
                                                    <td>{{ $d2->link_fb }}</td>
                                                    <td>{{ $d2->link_wa }}</td>
                                                    <td>{{ $d2->link_ig }}</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" class="bs-tooltip"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit">
                                                                    <i class="flaticon-edit  p-1 br-6 mb-1"></i>
                                                                </a>
                                                            </li>
                                                            <li><a href="#" class="bs-tooltip delete fire" data-toggle="tooltip"
                                                                    data-id="{{ $d2->id }}"
                                                                    data-nama="{{ $d2->nama_team }}" data-placement="top"
                                                                    title="" data-original-title="Delete">
                                                                    <i class="flaticon-delete  p-1 br-6 mb-1"></i>
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

        <script>
            c3 = $('#customer-info-detail-3').DataTable({
                "lengthMenu": [5, 10, 20, 50, 100],
                "language": {
                    "paginate": {
                        "previous": "<i class='flaticon-arrow-left-1'></i>",
                        "next": "<i class='flaticon-arrow-right'></i>"
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                }
            });

            multiCheck(c3);
        </script>
        <script>
            $('#default-ordering').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='flaticon-arrow-left-1'></i>",
                        "next": "<i class='flaticon-arrow-right'></i>"
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                },
                "order": [
                    [3, "desc"]
                ],
                drawCallback: function() {
                    $('.dataTables_paginate > .pagination').addClass(
                        ' pagination-style-13 pagination-bordered mb-5');
                }
            });
        </script>



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
                        window.location = "/deleteteam/" + id + ""
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
    </script>

    {{-- @endpush --}}
@endsection
