@extends('Template.template')

@section('Title')
    <h4>Dashboard</h4>
@endsection

@section('Content')   
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
        <div class="col-sm-7">
            <div class="card-body">
            <h5 class="card-title text-primary">Selamat datang bapak/ibu STAFF ADMIN SMK LETRIS INDONESIA 2! 🎉</h5>
            <p class="mb-4">
                Aplikasi ini adalah aplikasi data informasi siswa alumni SMK LETRIS INDONESIA 2. <br/>
                Di aplikasi ini, <span class="fw-bold"> berfungsi untuk membuat, melihat, mengubah, dan menghapus data siswa alumni SMK LETRIS INDONESIA 2. </span>
            </p>
            </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
            <img
                src="{{asset('/template/assets/img/illustrations/man-with-laptop-light.png')}}"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
            />
            </div>
        </div>
        </div>
    </div>
    </div>  
     
</div>    
@endsection