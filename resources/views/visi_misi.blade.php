@extends('layouts.main')

@section('container')
<div class="container" style="margin-bottom: 15rem;">
    <div class="d-flex justify-content-center mt-5" data-aos="fade-left" data-aos-once="true">
        <img src="{{ asset('storage/images/VisiMisi.jpg') }}" alt="img" width="50%">
    </div>
    <div class="py-2 px-4 my-5" data-aos="fade-up" data-aos-once="true">
        <h1>Visi</h1> 
        <p class="fs-4"> 
            Visi SMPN 7 Cimahi adalah Menjadikan sekolah unggulan yang berbasis IT, memiliki sarana dan prasarana yang lengkap untuk menciptakan pembelajaran aktif, kreatif, efektif, dan menyenangkan (PAKEM). Mengembangkan pendidikan karakter sehingga dapat melahirkan lulusan yang berakhlak mulia dan berkualitas
        </p>

        <h1>Misi</h1>
        <p class="fs-4">
            Melaksanakan pengembangan kegiatan bidang keagamaan <br>
            Melaksanakan pengembangan kegiatan bidang iptek <br>
            Melaksanakan pengembangan kurikulum <br>
            Melaksanakan peningkatan managemen sekolah <br>
            Melaksanakan peningkatan proses pembelajaran <br>
            Melaksanakan peningkatan pemahaman penilaian <br>
            Melaksanakan penggalangan pembiayaan pendidikan <br>
            Melaksanakan peningkatan lulusan <br>
            Melaksanakan peningkatan prestasi bidang akademik dan non akademik <br>
            Melaksanakan peningkatan kinerja SDM pendidik dan tenaga kependidikan <br>
            Melaksanakan pengembangan sarana prasarana yang lengkap dan memadai <br>
            Melaksanakan kegiatan peningkatan kualitas lingkungan hidup <br>
        </p>
    </div>
</div>
@endsection