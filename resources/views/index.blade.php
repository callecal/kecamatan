@extends('layouts.frontend.main')

@section('title')
Beranda | Desa {{ $pemerintahan->desa }}
@endsection

@section('content')
@include('layouts.frontend.partials.header')
<div class="container">
  <h3 class="my-4">
    <b>
      Kecamatan Sumur Bandung
    </b>
  </h3>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12">
      <p>
        Misi
      </p>
      <small>
        <b>
          <i>
            Menjadikan Kecamatan Sumur Bandung sebagai sentra jasa yang profesional di kota Bandung
          </i>
        </b>
      </small>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12">
      <p>
        Visi
      </p>
      <ul>

        <li>Meningkatkan kinerja pemerintahan Kecamatan Sumur Bandung secara profesional, efektif, efisien, transparan, dan akuntabel</li>
        <li>Meningkatkan peran Kecamatan dalam Meningkatkan kesejahteraan masyarakat untuk mendukung pengembangan jasa yang profesional</li>
        <li>Mewujudkan lingkungan Kecamatan yang tertata bersih dan rapih didukung oleh ketentraman dan ketertiban yang kondusif</li>

      </ul>
    </div>
  </div>
  <hr />
  <h3 class="my-4">
    <b>
      Kabar Kecamatan
    </b>
  </h3>
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="/uploads/img/banjir.JPG" class="card-img-top" height="270">
        <div class="card-body">
          <p class="card-text">
            Pemkot Bandung Prioritaskan Perbaikan Rumah Rusak Berat Akibat Banjir Braga
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="/uploads/img/banjir1.JPG" class="card-img-top" height="270">
        <div class="card-body">
          <p class="card-text">
            BPBD Jabar : 600 Rumah Terendam Banjir Bandang Braga Bandung
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="/uploads/img/posyandu.JPG" class="card-img-top" height="270">
        <div class="card-body">
          <p class="card-text">
            Ini Dia Daftar Posyandu Aktif Di Kecamatan Sumur Bandung
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection