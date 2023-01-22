@extends('layouts.default')

@section('content')
         <section>
            <div class="container mt-5">
            <h3>EDIT PROJECT</h3>
            <div class ="row">
                <div class ="col-lg-9">
                <form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multypart/form-data">
                    @csrf()
                    <div>
                         <div class="form-label mt-2">Nama komponen</div>
                        <input type="text" name="komponens" class="from-control" value="{{$data->komponens}}">
                    </div>
                    <div>
                        <div class="form-label mt-2">Fungsi</div>
                        <input type="text" name="fungsi" class="from-control mt-2"value="{{$data->fungsi}}">
                    </div>
                    </div>
                    <div>
                    <div class="form-label mt-2">Jenis</div>
                        <input type="text" name="jenis" class="from-control mt-2"value="{{$data->jenis}}">
                    <div>
                    <div class="form-label">File Gambar</div>
                    <input type="file" name="fGAMBAR" class="form-control"value="{{$data->fGAMBAR}}">
                </div>
                    </div>
                    <div class="form-label mt-2">
                       <button type="submit" class="btn btn-primary">update project</button>
                    </div>
                    <div class="form-label mt-5">
                       <a href="{{ url('/home')}}">
                       <button type="button" class="btn btn-primary">Kembali ke halaman Sebelumnya</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
