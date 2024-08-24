@extends('Template.template')

@section('Title')
    <h4>Detail Data Alumni</h4>
@endsection

@section('Content')   
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
        <div class="d-flex align-items-end row">
            <div class="card-body">
                {{-- Row start --}}
                <div class="row">
                    <div class="col-sm-3 text-center text-sm-left">
                        <img
                            class="rounded border border-3 border-dark"
                            src="{{asset('image/' . $data->foto)}}"
                            width="200"
                            alt="View Badge User"
                        />
                   
                    </div>
                    <div class="col-sm-2 mt-3">
                        <h5 class="fw-bold">NIS/NISN</h5>
                        <h5 class="fw-bold">NAMA</h5>
                        <h5 class="fw-bold">JENIS KELAMIN</h5>
                        <h5 class="fw-bold">LULUS</h5>
                        <h5 class="fw-bold">ALAMAT</h5>
                        <h5 class="fw-bold">KONTAK</h5>
                        <h5 class="fw-bold">CATATAN</h5>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <h5 class="fw-bold">: {{$data->nisn}}</h5>
                        <h5 class="fw-bold">: {{$data->nama}}</h5>
                        <h5 class="fw-bold">: {{$data->jenis_kelamin}}</h5>
                        <h5 class="fw-bold">: {{$data->tahun_masuk}} - {{$data->tahun_keluar}} | {{$data->lanjut}} | {{$data->dimana}}</h5>
                        <h5 class="fw-bold">: {{$data->alamat}}</h5>
                        <h5 class="fw-bold">: {{$data->email}} | {{$data->no_telp}} </h5>
                        <h5 class="fw-bold">: {{$data->catatan}}</h5>
                    </div>
                    <div class="col-sm-1">
                        <div class="container-m">
                            <a href="/data" class="rounded btn btn-outline-primary"><i class='bx bx-arrow-back'></i></a>
                        </div>
                    </div>

                </div>
                {{-- Row End --}}
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
@endsection