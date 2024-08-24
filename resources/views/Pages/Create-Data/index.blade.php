@extends('Template.template')

@section('Title')
    <h4>List Data Alumni</h4>
@endsection

@push('scripts')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
@endpush

@push('style')
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endpush

@section('Content')   
<div class="row">
  <div class="col-lg-12 mb-4 order-0">
    <div class="card">
    <div class="m-2">
          <div class="container-m">
              <a href="/create-data" class="rounded btn btn-outline-primary">Create Data</a>
                        </div>
                    </div>
      <div class="d-flex align-items-end row">
        <div class="card-body">
          <table class="table" id="myTable">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NIS/NISN</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Tahun Lulus</th>
                <th scope="col">MELANJUTKAN</th>
                <th scope="col">DIMANA</th>
                <th scope="col">DETAIL ~ EDIT ~ DELETE</th>
              </tr>
            </thead>
            <tbody>
                    @forelse ($data as $key => $item)
                        <tr>
                          <td>{{$key +1}}</td>
                          <td>{{$item->nisn}}</td>
                          <td>{{$item->nama}}</td>
                          <td>{{$item->tahun_keluar}}</td>
                          <td>{{$item->lanjut}}</td>
                          <td>{{$item->dimana}}</td>
                          <td>
                            <form action="/data/{{$item->id}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <a href="/data/{{$item->id}}" class="rounded btn btn-outline-info m-1"><i class='bx bx-align-left'></i></a>
                              <a href="/data/{{$item->id}}/edit" class="rounded btn btn-outline-warning m-1"><i class='bx bx-edit-alt'></i></a>
                              <button type="submit" value="delete" class="rounded btn btn-outline-danger m-1"><i class='bx bx-link-external'></i></button>
                            </form>
                          </td>
                      @empty

                      @endforelse
                  </tbody>
                </table>
          </div>
      </div>
  </div>
  
  </div>
    </div>
@endsection