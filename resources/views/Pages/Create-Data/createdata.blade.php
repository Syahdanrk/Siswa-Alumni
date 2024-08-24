@extends('Template.template')

@section('Title')
    <h4>Create Data Alumni</h4>
@endsection

@section('Content')   
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
        <div class="d-flex align-items-end row">
            <div class="card-body">
                <div class="text-center border border-2 border-dark rounded mb-2 text-dark fw-bold fs-large">FORM CREATE DATA ALUMNI SMK LETRIS INDONESIA 2</div>
                <form action="/data" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label>NIS/NISN</label>
                        <input type="number" class="form-control" name="nisn" placeholder="ex : 22102499188" >
                        @error('nisn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" >
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Jenis kelamin</label>
                        <select type="text" class="form-control" name="jenis_kelamin">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" rows="2" ></textarea>
                        @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label>Foto Siswa</label>
                        <div class="form-group mb-2 border rounded">
                        <input type="file" class="form-control" name="foto" >
                        </div>
                        @error('foto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label>Tahun Masuk</label>
                                <input type="number" class="form-control" name="tahun_masuk" placeholder="ex : 2017" >
                                @error('tahun_masuk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label>Tahun Lulus</label>
                                <input type="number" class="form-control" name="tahun_keluar" placeholder="ex : 2020" >
                                @error('tahun_keluar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-6">  
                                <label>Melanjutkan</label>
                                <select type="text" class="form-control" name="lanjut"> 
                                    <option value="Kuliah">Kuliah</option>
                                    <option value="Kerja">Kerja</option>
                                </select>
                                @error('lanjut')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">  
                                <label>Dimana</label>
                                <input type="text" class="form-control" name="dimana" placeholder="ex : Universitas Pamulang / Tokopedia ">
                                @error('dimana')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-6">  
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="smkletris2@gmail.com">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">  
                                <label>No Telp</label>
                                <input type="number" class="form-control" name="no_telp" placeholder="ex : 082255200224">
                                @error('no_telp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Catatan</label>
                        <textarea class="form-control" name="catatan" rows="3" ></textarea>
                        @error('catatan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2 mt-4">
                        <button class="w-100 btn btn-outline-primary rounded m-1" type="submit">Create Data Alumni</button>
                        <a href="/data" class="w-100 rounded btn btn-outline-info m-1">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>


    </div>
    </div>
@endsection