@extends('layouts.blog')

@section('container')
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark text-decoration-none" href="#">SMPN 7 CIMAHI</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Daftar</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">Komunitas</a>
                <a class="p-2 link-secondary" href="#">Sekolah</a>
                <a class="p-2 link-secondary" href="#">Departemen</a>
                <a class="p-2 link-secondary" href="#">PPDB</a>
                <a class="p-2 link-secondary" href="https://padamu.siap.web.id">Padamu Negeri</a>
                <a class="p-2 link-secondary" href="https://simpatika.kemenag.go.id">SIMPATIKA</a>
                <a class="p-2 link-secondary" href="https://bantuan.siap-online.com">Bantuan Online</a>
                <a class="p-2 link-secondary" href="#">Layanan Kami</a>
            </nav>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded position-relative" style="background: url('{{ asset('storage/images/D2iyz10UgAUc7bv.jpg') }}'); background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="col-md-6 px-5 py-3" style="border-radius: 10px; background-color: rgba(24, 24, 24, 0.74)">
                <h1 class="display-4 fw-bold">Sambutan Kepala Sekolah</h1>
                <p class="lead my-3">Assalamualaikum Warahmatullahi Wabarakatuh
                    Alhamdulillahirobbilalamin, kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia Allah SWT, akhirnya Website sekolah ini..</p>
                <p class="lead mb-0"><a href="/sambutan-kepala-sekolah" class="text-white fw-bold">Read more..</a></p>
            </div>
        </div>

        @if (Route::currentRouteName() == 'berita')
        @include('components.content8')
        @endif

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fw-bold">Recent Post</h4>
                        <ul>
                            <li>Pra Un ke-1</li>
                            <li>Selamat Datang</li>
                        </ul>
                    </div>

                    <div class="p-4">
                        <h4 class="fw-bold">Menu</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="/" class="text-decoration-none">Beranda</a></li>
                            <li><a href="/profil" class="text-decoration-none">Profil Sekolah</a></li>
                            <li><a href="/ekskul" class="text-decoration-none">Ekskul</a></li>
                            <li><a href="/program" class="text-decoration-none">Program</a></li>
                            <li><a href="/visi-misi" class="text-decoration-none">Visi-Misi</a></li>
                            <li><a href="/kurikulum" class="text-decoration-none">Kurikulum</a></li>
                            <li><a href="#" class="text-decoration-none">Akademik</a></li>
                            <li><a href="#" class="text-decoration-none">Data SIAP</a></li>
                            <li><a href="#" class="text-decoration-none">Kehidupan Sekolah</a></li>
                            <li><a href="#" class="text-decoration-none">Hubungi Kami</a></li>
                            <li><a href="#" class="text-decoration-none">Semua Berita</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="blog-footer">
        <p>Copyright Kelompok 6</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
@endsection
