@extends('layouts.main')

@section('title')
  Dasbor | Pelayanan Desa Cilame
@endsection

@section('css')
  <link
    rel="stylesheet"
    type="text/css"
    href="/assets/css/bootstrap-datetimepicker.min.css"
  />
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Profil Pemerintahan</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Data Profil Pemerintahan
        </div>
        <div class="panel-body">
          <div class="row">
              <div class="col-lg-12">
                <form action="/profil/pemerintahan/ubah/{{ $pemerintahan->id }}" method="post">
                  <input
                    type="hidden"
                    name="_method"
                    value="put"
                  />
                  <input
                    type="hidden"
                    name="_token"
                    value="{{ csrf_token() }}"
                  />
                  <div class="form-group {{ $errors->has('kabupaten') ? 'has-error has-feedback' : '' }}">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <label
                          class="control-label"
                          for="kabupaten"
                        >
                          Kabupaten
                        </label>
                        <input
                          type="text"
                          name="kabupaten"
                          class="form-control"
                          id="kabupaten"
                          value="{{ $pemerintahan->kabupaten }}"
                        />
                        @if($errors->has('kabupaten'))
                          <p class="text-danger">
                            {{ $errors->first('kabupaten') }}
                          </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-group {{ $errors->has('kecamatan') ? 'has-error has-feedback' : '' }}">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <label
                          class="control-label"
                          for="kecamatan"
                        >
                          Kecamatan
                        </label>
                        <input
                          type="text"
                          name="kecamatan"
                          class="form-control"
                          id="kecamatan"
                          value="{{ $pemerintahan->kecamatan }}"
                        />
                        @if($errors->has('kecamatan'))
                          <p class="text-danger">
                            {{ $errors->first('kecamatan') }}
                          </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-group {{ $errors->has('desa') ? 'has-error has-feedback' : '' }}">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <label
                          class="control-label"
                          for="desa"
                        >
                          Nama Desa
                        </label>
                        <input
                          type="text"
                          name="desa"
                          class="form-control"
                          id="desa"
                          value="{{ $pemerintahan->desa }}"
                        />
                        @if($errors->has('desa'))
                          <p class="text-danger">
                            {{ $errors->first('desa') }}
                          </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-group {{ $errors->has('nama_kepala_desa') ? 'has-error has-feedback' : '' }}">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <label
                          class="control-label"
                          for="nama-kepala-desa"
                        >
                          Nama Kepala Desa
                        </label>
                        <input
                          type="text"
                          name="nama_kepala_desa"
                          class="form-control"
                          id="nama-kepala-desa"
                          value="{{ $pemerintahan->nama_kepala_desa }}"
                        />
                        @if($errors->has('nama_kepala_desa'))
                          <p class="text-danger">
                            {{ $errors->first('nama_kepala_desa') }}
                          </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-group {{ $errors->has('email') ? 'has-error has-feedback' : '' }}">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <label
                          class="control-label"
                          for="email"
                        >
                          Email Desa
                        </label>
                        <input
                          type="text"
                          name="email"
                          class="form-control"
                          id="email"
                          value="{{ $pemerintahan->email }}"
                        />
                        @if($errors->has('email'))
                          <p class="text-danger">
                            {{ $errors->first('email') }}
                          </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-group {{ $errors->has('alamat') ? 'has-error has-feedback' : '' }}">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-xs-12">
                        <label
                          class="control-label"
                          for="alamat"
                        >
                          Alamat Desa
                        </label>
                        <textarea
                          name="alamat"
                          class="form-control"
                          rows="5"
                        >{{ $pemerintahan->alamat }}</textarea>
                        @if($errors->has('alamat'))
                          <p class="text-danger">
                            {{ $errors->first('alamat') }}
                          </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <button
                    type="submit"
                    class="btn btn-primary"
                  >
                    <i class="fa fa-check"></i> Ubah
                  </button>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
  <script
    type="text/javascript"
    src="/assets/js/moment.min.js"
  ></script>
  <script
    type="text/javascript"
    src="/assets/js/moment.with-locales.js"
  ></script>
  <script
    type="text/javascript"
    src="/assets/js/bootstrap-datetimepicker.min.js"
  ></script>
  <script>
    $('#tanggal-lahir').datetimepicker({
      format: 'DD-MM-YYYY',
      viewMode: 'years'
    });
  </script>
@endsection