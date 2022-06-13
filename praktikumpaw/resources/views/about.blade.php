@extends('template')

@section('content')              
 <div class="container mt-4">
    <div class="profile card">
        <div class="profile-body">
            <div class="profile-bio">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="img-thumbnail md-margin-bottom-10" src="gambar/{{ $gambar }}">
                    </div>
                    <div class="col-md-7">
                        <h1 class="text-center"><strong>About Me</strong></h1>
                        <br>
                        <h2>{{$nama}}</h2>
                        <span><strong>Email : </strong>{{$email}}</span>
                        <span><strong>&nbsp; &nbsp; Alamat : </strong>{{$alamat}}</span>
                        <hr>
                        <h6><strong>Background</strong></h6>
                        <p>Nama saya Ribut Dwi Artah, saya berasal dari Trenggalek. Saya merupakan ana ke 2 dari 2 bersaudara. Saya lulusan SDN 2 Dongko, SMPN 1 Dongko, SMAN 1 Dongko, dan kini melanjutkan kuliah di Universitas Trunojoyo Madura Jurusan Teknik Informatika</p>
                        <h6><strong>Suka Duka Praktikum PAW</strong></h6>
                        <p>Senang karena praktikum PAW ini merupakan praktikum offline pertama saya setelah 3 semester melaksanakan praktikum secara online. Bisa bertemu dengan teman-teman dan merasakan real vibes ketika praktikum. Mungkin dukanya ketika tugas praktikum keluaar di tengah-tengah gempuran tugas yang lain. Hehe, but untuk semuanya I'm Happy</p>
                    </div>
                </div>    
            </div>
    	</div>
    </div>
</div>                       
@endsection