@extends('layouts.main')

@section('container')
    {{-- HEADLINE --}}
    <div class="position-relative overflow-hidden p-md-5 m-md-3 text-center"
        style="background: url('https://pbs.twimg.com/media/D2iyz10UgAUc7bv.jpg'); background-size: 100% 100%; height: 45vmax; background-repeat: no-repeat; border-radius: 10px; margin-top: 10px"
        data-aos="fade-up" data-aos-duration="1100">
        <div class="position-absolute"
            style="z-index: 0; background-color: rgba(0, 0, 0, 0.37); width: 190%; height: 150%; transform: translateX(-3%) translateY(-8%)">
        </div>
        <div class="col-md-5 mx-auto position-relative" style="margin-top: 15%" data-aos="fade-up" data-aos-duration="1100">
            <h1 class="display-4 fw-bold text-white" style="z-index: 10">Selamat datang di website SMPN 7 Cimahi</h1>
            <p class="lead fw-normal fs-3 sm-fs-5 text-white" style="z-index: 10">Informasi PPDB dan Penerimaan Siswa terbaru silahkan klik link dibawah ini. Ayo, daftar segera!</p>
            <a class="btn btn-light fw-bold" href="#" style="border-width: 4px; z-index: 10">Daftar</a>
        </div>
    </div>

    
    
    {{-- RESPONSIVE LEFT-ALIGNED HERO --}}
    <div class="container col-xxl-8 px-4" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5" style="margin-top: 8rem;">

            {{-- ? --}}
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://foto.data.kemdikbud.go.id/getImage/20224078/1.jpg"
                    class="d-block mx-lg-auto img-fluid shadow-lg" alt="img" width="500" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Mengenal lebih dekat</h1>
                <p class="lead">SMPN 7 Cimahi adalah Sekolah Menengah Pertama yang berdomisili di Cimahi, tepatnya di Jalan Kebon Jeruk RT 001 RW 020, 
                    Cibeureum, Kecamatan Cimahi Selatan, Kota Cimahi Provinsi Jawa Barat.<br>SMPN 7 Cimahi menggunakan Kurikulum 2013 dengan menerapkan manajemen berbasis sekolah.</p>
                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- FEATURES --}}
    <div class="container px-4" id="featured-3" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
        <div class="px-2 mt-5" id="hanging-icons">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3" style="margin-top: 5em; margin-bottom: 5em">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-transparent flex-shrink-0 me-3" style="color: #42B5DB">
                        <i data-feather="box"></i>
                    </div>
                    <div>
                        <h2>Sarana & Prasarana</h2>
                        <p>SMPN 7 Cimahi memiliki 27 Ruang Kelas, 1 Laboratorium, dan 1 Perpustakaan.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-transparent flex-shrink-0 me-3" style="color: #42B5DB">
                        <i data-feather="book"></i>
                    </div>
                    <div>
                        <h2>Pelajaran</h2>
                        <p>Ada 36 Mata Pelajaran yang diajar di SMPN 7 Cimahi.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-transparent flex-shrink-0 me-3" style="color: #42B5DB">
                        <i data-feather="bookmark"></i>
                    </div>
                    <div>
                        <h2>Ekstrakurikuler</h2>
                        <p>Terdapat 10 Ekstrakurikuler di SMPN 7 Cimahi yang bisa diikuti oleh siswa dan siswi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FEATURETTE --}}
    <div class="container px-4 marketing" style="margin-top: 10em">
        <div class="row featurette">
            <div class="col-md-7 order-md-2" data-aos="fade-down" data-aos-duration="1200" data-aos-once="true">
              <h2 class="featurette-heading">SMPN 7 Cimahi <span class="text-muted">menyediakan fasilitas yang baik.</span></h2>
              <p class="lead">
                  Guna menunjang semua kebutuhan pendidikan bagi siswa dan siswi, SMPN 7 Cimahi telah menyediakan fasilitas belajar yang cukup untuk melaksanakan pembelajaran KBM.
                  <br>Salah satu nya adalah koneksi internet fiber optic yang biasa dimanfaatkan untuk Ujian berbasis online atau daring. 
              </p>
            </div>
            <div class="col-md-5 order-md-1" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true">
                <img src="https://foto.data.kemdikbud.go.id/getImage/20224078/2.jpg" class="d-block mx-lg-auto img-fluid shadow-lg" alt="img" height="500" width="500">
            </div>
          </div>
    </div>

    
    {{-- NUMBERS --}}
    <div class="container-fluid text-center" style="margin-top: 15em; margin-bottom: 5em">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="rect">
                <h1>45</h1>
                <p>Guru</p>
            </div>
            <div class="rect">
                <h1>498</h1>
                <p>Siswa Laki-laki</p>
            </div>
            <div class="rect">
                <h1>528</h1>
                <p>Siswa Perempuan</p>
            </div>
            <div class="rect">
                <h1>27</h1>
                <p>Rombongan Kelas</p>
            </div>
        </div>
    </div>

    {{-- JUMBOTRON --}}
    <div class="p-5 mt-5" style="background-color: #37535C" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
        <div class="container py-5">
            <h1 class="display-5 fw-bold text-white">Daftar sekarang!</h1>
            <p class="col-md-8 fs-4 text-white">Jadi murid yang unggul dalam pendidikan dan berkarakter bersama kami. Kuota terbatas!</p>
            <button class="btn btn-outline-light" type="button">Daftar</button>
        </div>
    </div>
@endsection
