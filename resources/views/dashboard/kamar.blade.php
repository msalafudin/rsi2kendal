@section('meta')
    <meta name="keywords" content="VIP 1 Visi Trader, vip 1vt, vip satuvisitrader, vip satu visi trader" />
    <meta name="description" content="1 Visi Trader | Forex Trader, Market Reasearch & Strategy Development">
    <meta name="author" content="1VISITRADER" />
@endsection

@section('css')
    <title>Kamar - RSI Muhammadiyah 2 Kendal</title>
    <!-- DataTables Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection

@extends('dashboard.layouts.main')

@section('container')
    <!--==================================================-->
    <!-- Start mediic Counter Section -->
    <!--==================================================-->
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-mediic-section">
                        <div class="mediic-section-title cursor-scale" data-aos="flip-right">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row about-bg align-items-center">
                <div class="col-lg-7">
                    <div class="about-thumb" data-aos="fade-up-right">

                    </div>
                </div>
                <div class="mediic-shape" data-aos="fade-up-left">
                    <img src="assets/images/resource/dctr.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-mediic-section">
                        <div class="mediic-section-title cursor-scale" data-aos="flip-right">
                            <h1>
                                List Kamar
                                <span><img src="assets/images/resource/star.png" alt="" /></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row about-bg align-items-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Data Kamar</h2>
                            <div class="table-responsive user-datatable">
                                <button class="btn btn-success m-1" type="button" onclick="tambah()">Tambah
                                    <i data-feather="edit"></i>
                                </button>
                                <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Kamar</th>
                                            <th>Tipe Kamar</th>
                                            <th>Terpakai</th>
                                            <th>Tersedia</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_data as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->namaTipe }}</td>
                                                <td>{{ $data->totalBed - $data->avail }}</td>
                                                <td>{{ $data->avail }}</td>
                                                <td>{{ $data->totalBed }}</td>
                                                <td>
                                                    <button class="btn btn-warning m-1" type="button" onclick="showUpdate({{ $data->id }})">Edit
                                                        <i data-feather="edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger m-1" type="button" onclick="deleteData({{ $data->id }})">Hapus
                                                        <i data-feather="trash-2"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mediic-shape" data-aos="fade-up-left">
                    <img src="assets/images/resource/dctr.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End mediic Service Section  -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start mediic Subscribe Section -->
    <!--==================================================-->



    <!--==================================================-->
    <!-- End mediic Subscribe Section -->
    <!--==================================================-->
@endsection

@section('js')
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-bebas" id="addModalLabel">Tambah Data Kamar</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-add" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlInput15">Nama Kamar</label>
                                    <input class="form-control input-air-primary" id="namaKamar" name="namaKamar" type="input" placeholder="Masukkan Nama Kamar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlSelect9">Tipe Kamar</label>
                                    <select class="form-select digits" id="tipeKamar" name="tipeKamar">
                                        @foreach ($tipekamars as $data)
                                            <option value="{{ $data->id }}">{{ $data->namaTipe }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlInput15">Terpakai</label>
                                    <input class="form-control input-air-primary" id="terpakai" name="terpakai" type="number" value='0' placeholder="Kamar Terpakai">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlInput15">Total</label>
                                    <input class="form-control input-air-primary" id="total" name="total" type="number" value='0' placeholder="Total Kamar">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success f-w-500" type="button" onclick="save()">Simpan</button>

                            <button class="btn btn-danger f-w-500" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-bebas" id="updateModalLabel">Update Data Kamar</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form" method="POST">
                        @csrf
                        <input type="hidden" name="idup" id="idup">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlInput15">Nama Kamar</label>
                                    <input class="form-control input-air-primary" id="fenamaKamar" name="fenamaKamar" type="input" placeholder="Masukkan Nama Kamar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlSelect9">Tipe Kamar</label>
                                    <select class="form-select digits" id="fetipeKamar" name="fetipeKamar">
                                        @foreach ($tipekamars as $data)
                                            <option value="{{ $data->id }}">{{ $data->namaTipe }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlInput15">Terpakai</label>
                                    <input class="form-control input-air-primary" id="feterpakai" name="feterpakai" type="number" value='0' placeholder="Kamar Terpakai">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label text-black" for="exampleFormControlInput15">Total</label>
                                    <input class="form-control input-air-primary" id="fetotal" name="fetotal" type="number" value='0' placeholder="Total Kamar">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success f-w-500" type="button" onclick="update()">Simpan</button>

                            <button class="btn btn-danger f-w-500" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="assets/js/swiper.min.js"></script>
    <!-- jQuery -->
    <!-- choose one -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showUpdate(id) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/list_datakamar',
                type: "POST",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(data) {
                    $('.modal-backdrop.fade.show').remove();
                    $('#updateModal').modal('show');
                    console.log(data);

                    $('#idup').val(data.id);
                    $('#fenamaKamar').val(data.nama);
                    $('#feterpakai').val(data.totalBed - data.avail);
                    $('#fetotal').val(data.totalBed);

                }
            });

        }

        function tambah() {
            $('#addModal').modal('show');
            $('.modal-backdrop.fade.show').remove();
        }

        function save() {
            var formData = new FormData($('#form-add')[0]);

            Swal.fire({
                title: 'Apakah anda yakin?',
                html: 'Anda akan menyimpan data ini.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '<b>Simpan</b>',
                cancelButtonText: '<b>Batal</b>'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '/kamar/add_kamar',
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: "JSON",
                        success: function(data) {
                            if (data.status) {
                                Swal.fire({
                                    title: 'Completed!',
                                    html: 'Anda berhasil menambah data ini!',
                                    icon: 'success',
                                    confirmButtonColor: '#00376b',
                                    confirmButtonText: '<b>Done!</b>',
                                }).then((result) => {
                                    location.reload()
                                });

                            } else {
                                Swal.fire({
                                    title: 'Gagal!',
                                    html: '<h6>' + data.message + '</h6>',
                                    icon: 'error',
                                    confirmButtonColor: '#912525',
                                    confirmButtonText: '<b>Kembali</b>',
                                })
                            }
                        }
                    });
                }

            })

        }

        function update() {
            var formData = new FormData($('#form')[0]);

            Swal.fire({
                title: 'Apakah anda yakin?',
                html: 'Anda akan merubah data ini.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '<b>Simpan</b>',
                cancelButtonText: '<b>Batal</b>'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '/kamar/update_kamar',
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: "JSON",
                        success: function(data) {
                            if (data.status) {
                                Swal.fire({
                                    title: 'Completed!',
                                    html: 'Anda berhasil mengubah data ini!',
                                    icon: 'success',
                                    confirmButtonColor: '#00376b',
                                    confirmButtonText: '<b>Done!</b>',
                                }).then((result) => {
                                    location.reload()
                                });

                            } else {
                                Swal.fire({
                                    title: 'Gagal!',
                                    html: '<h6>' + data.message + '</h6>',
                                    icon: 'error',
                                    confirmButtonColor: '#912525',
                                    confirmButtonText: '<b>Kembali</b>',
                                })
                            }
                        }
                    });
                }

            })

        }

        function deleteData(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                html: 'Anda akan menghapus data ini.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#54ba4a',
                cancelButtonColor: '#fc4438',
                confirmButtonText: '<b>Hapus</b>',
                cancelButtonText: '<b>Batal</b>'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/kamar/delete_kamar',
                        type: "POST",
                        data: {
                            id: id
                        },
                        dataType: "JSON",
                        success: function(data) {
                            if (data.status) {
                                Swal.fire({
                                    title: 'Completed!',
                                    html: 'Anda berhasil menghapus data!',
                                    icon: 'success',
                                    confirmButtonColor: '#54ba4a',
                                    confirmButtonText: '<b>Done!</b>',
                                }).then((result) => {
                                    location.reload()
                                });

                            } else {
                                Swal.fire({
                                    title: 'Gagal!',
                                    html: '<h6>Terjadi sesuatu kesalahan!</h6>',
                                    icon: 'error',
                                    confirmButtonColor: '#54ba4a',
                                    confirmButtonText: '<b>Kembali</b>',
                                })
                            }
                        }
                    });
                }
            });


        }
    </script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ada data yang tersedia",
                    "infoFiltered": "(difilter dari _MAX_ total data)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                },
                "pageLength": 5,
                "ordering": true,
                "searching": true
            });
        });
    </script>
@endsection
