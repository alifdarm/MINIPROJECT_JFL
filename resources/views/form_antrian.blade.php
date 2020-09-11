@extends('partials.master')
@push('script')
@section('up_container')

@if($id == 1)
<div class="container-fluid">
    <div class="header-body">
      <div class="text-center">
        <img src="{{ asset('BNI.png') }}" alt="image-placeholder" style="height:250px;width:auto;">
      </div>
      <!-- Card stats -->

    </div>
  </div>
</div>

@elseif($id == 2)
<div class="container-fluid">
    <div class="header-body">
      <div class="text-center">
        <img src="{{ asset('k_imigrasi.png') }}" alt="image-placeholder" style="height:250px;width:auto;">
      </div>
      <!-- Card stats -->

    </div>
  </div>
</div>

@elseif($id == 3)
<div class="container-fluid">
    <div class="header-body">
      <div class="text-center">
        <img src="{{ asset('bpjs.jpg') }}" alt="image-placeholder" style="height:250px;width:auto;">
      </div>
      <!-- Card stats -->

    </div>
  </div>
</div>

@elseif($id == 4)
<div class="container-fluid">
    <div class="header-body">
      <div class="text-center">
        <img src="{{ asset('samsat.png') }}" alt="image-placeholder" style="height:250px;width:auto;">
      </div>
      <!-- Card stats -->

    </div>
  </div>
</div>
@endif
@endsection

@section('down_container')
<form action="{{ route('miniproject.store') }}" method="post">
@csrf
@if($id == 1)
<div class="row d-inline-flex bd-highlight justify-content-around pl-4" style="width:100%;">
    <div class="col-md-6" data-select2-id="46">
        <div class="form-group" data-select2-id="45">
          <h3><label>Pilih Layanan :</label></h3>
          <select name="service" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option selected="selected" data-select2-id="3">--Select One--</option>
            <option data-select2-id="47">01 - Transfer</option>
            <option data-select2-id="48">01 - Deposit</option>
            <option data-select2-id="49">01 - Penarikan</option>
            <option data-select2-id="50">01 - Buka Rekening</option>
            <option data-select2-id="51">01 - Daftar Beasiswa JFLS</option>
            <option data-select2-id="52">01 - Pengaduan</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
    </div>

@elseif($id == 2)
<div class="row d-inline-flex bd-highlight justify-content-around pl-4" style="width:100%;">
    <div class="col-md-6" data-select2-id="46">
        <div class="form-group" data-select2-id="45">
          <h3><label>Pilih Layanan :</label></h3>
          <select name="service" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option selected="selected" data-select2-id="3">--Select One--</option>
            <option data-select2-id="47">02 - Buat passport</option>
            <option data-select2-id="48">02 - Pelayanan WNA</option>
            <option data-select2-id="49">02 - Pemberian Surat Keterangan Keimigrasian</option>
            <option data-select2-id="50">02 - Layanan pemberian ITAS Baru</option>
            <option data-select2-id="51">02 - Pendaftaran Kewarganegaraan Ganda Terbatas</option>
            <option data-select2-id="52">02 - Pengaduan</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
    </div>

@elseif($id == 3)
<div class="row d-inline-flex bd-highlight justify-content-around pl-4" style="width:100%;">
    <div class="col-md-6" data-select2-id="46">
        <div class="form-group" data-select2-id="45">
          <h3><label>Pilih Layanan :</label></h3>
          <select name="service" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option selected="selected" data-select2-id="3">--Select One--</option>
            <option data-select2-id="47">03 - Pelayanan Kesehatan Tingkat Pertama (Puskesmas, Klinik Kesehatan, dan Dokter Umum)</option>
            <option data-select2-id="48">03 - Pelayanan kesehatan rujukan tingkat lanjutan (rumah sakit)</option>
            <option data-select2-id="49">03 - Pelayanan ambulans darat dan air</option>
            <option data-select2-id="52">03 - Pengaduan</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
    </div>

@elseif($id == 4)
<div class="row d-inline-flex bd-highlight justify-content-around pl-4" style="width:100%;">
    <div class="col-md-6" data-select2-id="46">
        <h3><label>Pilih Layanan :</label></h3>
        <div class="form-group" data-select2-id="45">
            <select name="service" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option selected="selected" data-select2-id="3" id="choice">--Select One--</option>
                <option data-select2-id="47">04 - Samsat Induk</option>
                <option data-select2-id="48">04 - Samsat Drive Thru</option>
                <option data-select2-id="49">04 - Samsat Keliling</option>
                <option data-select2-id="50">04 - Gerai Samsat</option>
                <option data-select2-id="51">04 - Samsat Kecamatan</option>
                <option data-select2-id="52">04 - Pengaduan</option>
            </select>
        </div>
        <!-- /.form-group -->

      </div>
    </div>

@endif

<div id="card_antre" class="row d-inline-flex bd-highlight justify-content-around pl-4" style="width:100%; display:none;">
    <div class="card" id="antrean" style="width: 25rem;">
        <div class="card-body">
            @if($id == 1)
            <div class="alert alert-default" role="alert">
                <h2 style="color: aliceblue;"><strong>+- {{ 7*($bni_len) }} menit</strong> ({{ $bni_len}} Antrean)</h2> <br>
                No. antrean sekarang :<select name="no_bni"><strong><option selected="selected" data-select2-id="3" id="choice"> A{{ $bni_len + 1 }} </option></strong></select><br>
                Rata-rata  Tiap Antrean : <strong> 9 menit</strong>
            </div>
            @elseif($id == 2)
            <div class="alert alert-default" role="alert">
                <h2 style="color: aliceblue;"><strong>+- {{ 7*($imigrasi_len) }} menit</strong> ({{ $imigrasi_len}} Antrean)</h2> <br>
                No. antrean sekarang :<select name="no_imigrasi"><strong><option selected="selected" data-select2-id="3" id="choice"> B{{ $imigrasi_len + 1 }} </option></strong></select><br>
                Rata-rata  Tiap Antrean : <strong> 9 menit</strong>
            </div>
            @elseif($id == 3)
            <div class="alert alert-default" role="alert">
                <h2 style="color: aliceblue;"><strong>+- {{ 7*($bpjs_len) }} menit</strong> ({{ $bpjs_len}} Antrean)</h2> <br>
                No. antrean sekarang :<select name="no_bpjs"><strong><option selected="selected" data-select2-id="3" id="choice"> C{{ $bpjs_len + 1 }} </option></strong></select><br>
                Rata-rata  Tiap Antrean : <strong> 9 menit</strong>
            </div>
            @elseif($id == 4)
            <div class="alert alert-default" role="alert">
                <h2 style="color: aliceblue;"><strong>+- {{ 7*($samsat_len) }} menit</strong> ({{ $samsat_len}} Antrean)</h2> <br>
                No. antrean sekarang :<select name="no_samsat"><strong><option selected="selected" data-select2-id="3" id="choice"> C{{ $samsat_len + 1 }} </option>    </strong></select><br>
                Rata-rata  Tiap Antrean : <strong> 9 menit</strong>
            </div>
            @endif
          <p class="card-text">Keterangan :</p>
          @if($id == 1)
          <ul>
              <li>Wajib Pakai Masker</li>
              <li>Siapkan KTP, kartu ATM, serta buku rekening</li>
              <li>hadir 10 menit sebelum Antrean</li>
              <li>Kontak : 08xxxxxxxxxx</li>
          </ul>
          @elseif($id == 2)
          <ul>
              <li>Wajib Pakai Masker</li>
              <li>Siapkan dokumen-dokumen lengkap</li>
              <li>hadir 10 menit sebelum Antrean</li>
              <li>Kontak : 08xxxxxxxxxx</li>
          </ul>
          @elseif($id == 3)
          <ul>
              <li>Wajib Pakai Masker</li>
              <li>Siapkan KTP (atau kartu identitas lain) serta kartu BPJS</li>
              <li>hadir 10 menit sebelum Antrean</li>
              <li>Kontak : 08xxxxxxxxxx</li>
          </ul>
          @elseif($id == 4)
          <ul>
              <li>Wajib Pakai Masker</li>
              <li>Siapkan STNK lama dan KTP pemilik kendaraan</li>
              <li>hadir 10 menit sebelum Antrean</li>
              <li>Kontak : 08xxxxxxxxxx</li>
          </ul>
          @endif
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Ambil
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    Apakah Anda ingin mengambil nomor antrean?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </div>
</div>
</form>
@endsection


