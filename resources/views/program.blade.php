@extends('layouts.main')

@section('container')
    <div class="container marketing">
        <div class="row featurette" style="margin-top: 4em; margin-bottom: 10em">
            <div class="col-md-5 order-md-1 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1500">
                <img src="{{ asset('storage/images/people-1.jpg') }}"
                    alt="img" width="105%" >
            </div>
            <div class="col-md-7 order-md-2 px-4" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="featurette-heading">Beberapa program unggulan<span class="text-muted"> yang kami adakan</span></h2>
                <p class="lead">
                    adalah pembacaan juz amma dan kajian keagamaan setiap hari selasa pagi. Diadakan juga kegiatan sholat dhuha
                    beserta kultum di kamis pagi. Selain kegiatan keagamaan, SMPN 7 Cimahi juga selalu membiasakan membaca buku 
                    15 menit sebelum pelajaran dimulai. Untuk hari Jumat, Laki-laki diwajibkan untuk jumatan di sekolah dan bagi 
                    yang perempuan mendapatkan bimbingan konseling dari BK, untuk yang non muslim pun mendapatkan kajian dari 
                    agama nya di hari jumat. 
                </p>
            </div>
        </div>
    </div>

    <div class="container marketing" style="margin-bottom: 10em">
        <div class="row row-cols-lg-3" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
            <div class="col-md-5 order-md-1 d-flex justify-content-center py-3">
                <img src="{{ asset('storage/images/school-2.jpg') }}"
                    alt="img" width="105%">
            </div>
            <div class="col-md-5 order-md-1 d-flex justify-content-center py-3">
                <img src="{{ asset('storage/images/people-2.jpg') }}"
                    alt="img" width="105%">
            </div>
            <div class="col-md-5 order-md-1 d-flex justify-content-center py-3">
                <img src="{{ asset('storage/images/people-3.webp') }}"
                    alt="img" width="105%">
            </div>
        </div>
        <p class="lead my-5 mx-3" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
            Di hari jumat juga, setelah sholat jumat murid laki-laki dibiasakan untuk bersih-bersih masjid sekolah.
            Setiap murid laki-laki untuk istirahat kedua, tepatnya jam 12, diwajibkan sholat dzuhur berjamaah.
        </p>
    </div>
@endsection
