{{-- HEADER --}}
<header class="d-flex justify-content-center py-3 px-5 shadow-md">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/"
                class="{{ $active === 'home' ? 'nav-link active' : 'nav-link' }}"
                style="border-radius: 10px; font-weight: 700; {{ $active === 'home' ? 'color: #fffff; background-color: #338BA8' : 'color: #338BA8' }}">Beranda</a></li>
        <li class="nav-item"><a href="/program"
                class="{{ $active === 'program' ? 'nav-link active' : 'nav-link' }}"
                style="border-radius: 10px; font-weight: 700; {{ $active === 'program' ? 'color: #fffff; background-color: #338BA8' : 'color: #338BA8' }}">Program</a>
        </li>
        <li class="nav-item"><a href="/kurikulum"
                class="{{ $active === 'kurikulum' ? 'nav-link active' : 'nav-link' }}"
                style="border-radius: 10px; font-weight: 700; {{ $active === 'kurikulum' ? 'color: #fffff; background-color: #338BA8' : 'color: #338BA8' }}">Kurikulum</a>
        </li>
        <li class="nav-item"><a href="/ekskul"
                class="{{ $active === 'ekskul' ? 'nav-link active' : 'nav-link' }}"
                style="border-radius: 10px; font-weight: 700; {{ $active === 'ekskul' ? 'color: #fffff; background-color: #338BA8' : 'color: #338BA8' }}">Ekskul</a>
        </li>
        <li class="nav-item"><a href="/profil"
                class="{{ $active === 'profil' ? 'nav-link active' : 'nav-link' }}"
                style="border-radius: 10px; font-weight: 700; {{ $active === 'profil' ? 'color: #fffff; background-color: #338BA8' : 'color: #338BA8' }}">Profil</a>
        </li>
        <li class="nav-item"><a href="/visi-misi"
                class="{{ $active === 'visi-misi' ? 'nav-link active' : 'nav-link' }}"
                style="border-radius: 10px; font-weight: 700; {{ $active === 'visi-misi' ? 'color: #fffff; background-color: #338BA8' : 'color: #338BA8' }}">Visi Misi</a>
        </li>
    </ul>
</header>
