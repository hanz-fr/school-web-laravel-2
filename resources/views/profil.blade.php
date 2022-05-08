@extends('layouts.main')

@section('container')
<div class="container" style="margin-top: 5em; margin-bottom: 5em">
    
    {{-- First Table --}}
    <div class="mx-3 my-5">
    <h1 class="fs-2 fw-bold"> 
        Kesiapan TIK
    </h1>
        <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">Status Verifikasi Validasi</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Verifikasi Validasi Sekolah</td>
            <td>:</td>
            <td class="text-success fw-bold">Sudah</td>
          </tr>
          <tr>
            <td>Verifikasi Dinas</td>
            <td>:</td>
            <td class="text-success fw-bold">Disetujui</td>
          </tr>
          <tr>
            <td>Status Pelaksanaan</td>
            <td>:</td>
            <td class="fw-normal">Mandiri dan Ditumpangi</td>
          </tr>
          <tr>
            <td>Moda Pelaksanaan</td>
            <td>:</td>
            <td class="fw-normal">Semi Online</td>
          </tr>
        </tbody>
      </table>
    </div>


    {{-- Second Table --}}
    <div class="mx-3 my-5">
            <table class="table">
            <thead class="table-light">
              <tr>
                <th scope="col">Keterisian Data (Verval)</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Laboratorium Komputer (Baik, Rusak Ringan, Rusak Sedang)</td>
                <td>3 Ruang</td>
              </tr>
              <tr>
                <td>Jumlah Komputer Utama/Proktor</td>
                <td>4 Unit</td>
              </tr>
              <tr>
                <td>Jumlah Komputer Sesuai Spesifikasi</td>
                <td>Milik : 120 Unit,
                    Bukan Milik : 0 Unit</td>
              </tr>
              <tr>
                <td>Sumber Listrik dan Daya Listrik</td>
                <td>PLN, 17500 Watt</td>
              </tr>
              <tr>
                <td>Jaringan Internet dan Bandwidth (Mbps)	</td>
                <td>Telkom Speedy, Upload : 20 Mbps, Download : 100 Mbps</td>
              </tr>
              <tr>
                <td>Jumlah Switch Hub dan Wifi</td>
                <td>6 Buah, 5 Buah</td>
              </tr>
              <tr>
                <td>Bersedia ditumpangi atau tidak</td>
                <td>Bersedia</td>
              </tr>
            </tbody>
        </table>
    </div>


    {{-- Third Table --}}
    <div class="mx-3 my-5">
        <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">Variabel Kesiapan TIK</th>
            <th scope="col">Kondisi Data</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>UNBK Tahun Sebelumnya</td>
            <td><i data-feather="check"></i></td>
          </tr>
          <tr>
            <td>Memiliki Laboratorium Komputer</td>
            <td><i data-feather="check"></i></td>
          </tr>
          <tr>
            <td>Mendapat Bantuan TIK</td>
            <td></td>
          </tr>
          <tr>
            <td>Memiliki Minimal 15 Komputer</td>
            <td><i data-feather="check"></i></td>
          </tr>
          <tr>
            <td>Memiliki Aliran Listrik</td>
            <td><i data-feather="check"></i></td>
          </tr>
          <tr>
            <td>Memiliki Jaringan Internet</td>
            <td><i data-feather="check"></i></td>
          </tr>
        </tbody>
    </table>
    </div>


    {{-- Fourth Table --}}
    <div class="mx-3 my-5">
        <h1 class="fs-2 fw-bold">
            Kesiapan Sanitasi
        </h1>
        <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">Sanitasi</th>
            <th scope="col">Jumlah / Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Sumber Air</td>
            <td>Sumur terlindungi</i></td>
          </tr>
          <tr>
            <td>Kecukupan air</td>
            <td>2</td>
          </tr>
          <tr>
            <td>Ketersediaan Air Minum Siswa</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Memproses Air</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Siswa Membawa Air</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Toilet Siswa Laki-laki</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Toilet Siswa Perempuan</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Toilet Siswa Umum</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Toilet Siswa Kecil</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Tipe Jamban</td>
            <td>1</td>
          </tr>
          <tr>
            <td>Tempat Cuci Tangan</td>
            <td>26</td>
          </tr>
          <tr>
            <td>Air Mengalir</td>
            <td>0</td>
          </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection