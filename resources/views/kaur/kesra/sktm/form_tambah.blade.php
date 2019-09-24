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
  <style>
    #scrollable-dropdown-menu .tt-dropdown-menu {
      max-height: 150px;
      overflow-y: auto;
    }
  </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Form Tambah Data Keterangan Tidak Mampu</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Tambah Data Keterangan Tidak Mampu
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form action="/kaur-kesra/sktm/simpan" method="post">
                <h4>
                  <b>
                    IDENTITAS PENDUDUK
                  </b>
                </h4>
                <hr />
                <input
                  type="hidden"
                  name="_token"
                  value="{{ csrf_token() }}"
                />
                <input
                  type="hidden"
                  name="master_penduduk_id"
                  id="master-penduduk-id"
                />
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group {{ $errors->has('nik') ? 'has-error has-feedback' : '' }}">
                      <label
                        class="control-label"
                        for="nik"
                      >
                        NIK
                      <a
                        href="/master/penduduk/form-tambah"
                      >
                        <i class="fa fa-plus"></i>
                        Tambah Data Penduduk
                      </a>
                      </label>
                      <div class="scrollable-dropdown-menu">

                      <input
                        type="text"
                        name="nik"
                        class="form-control"
                        id="nik"
                        value="{{ old('nik') }}"
                        autocomplete="off"
                      />
                      </div>
                      @if($errors->has('nik'))
                        <p class="text-danger">
                          {{ $errors->first('nik') }}
                        </p>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group {{ $errors->has('nama') ? 'has-error has-feedback' : '' }}">
                      <label
                        class="control-label"
                        for="nama"
                      >
                        Nama Lengkap
                      <a
                        href="/master/penduduk/form-tambah"
                      >
                        <i class="fa fa-plus"></i>
                        Tambah Data Penduduk
                      </a>
                      </label>
                      <input
                        type="text"
                        name="nama"
                        class="form-control"
                        id="nama"
                        value="{{ old('nama') }}"
                        autocomplete="off"
                      />
                      @if($errors->has('nama'))
                        <p class="text-danger">
                          {{ $errors->first('nama') }}
                        </p>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                      <label
                        class="control-label"
                        for="tempat-lahir"
                      >
                        Tempat Lahir
                      </label>
                      <input
                        type="text"
                        name="jenis_kelamin"
                        class="form-control"
                        id="tempat-lahir"
                        readonly
                      />
                      @if($errors->has('jenis_kelamin'))
                        <p class="text-danger">
                          {{ $errors->first('jenis_kelamin') }}
                        </p>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="form-group">
                      <label
                        class="control-label"
                        for="tanggal-lahir"
                      >
                        Tanggal Lahir
                      </label>
                      <input
                        type="text"
                        name="jenis_kelamin"
                        class="form-control"
                        id="tanggal-lahir"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="form-group">
                      <label
                        class="control-label"
                        for="jenis-kelamin"
                      >
                        Jenis Kelamin
                      </label>
                      <input
                        type="text"
                        name="jenis_kelamin"
                        class="form-control"
                        id="jenis-kelamin"
                        readonly
                      />
                      @if($errors->has('jenis_kelamin'))
                        <p class="text-danger">
                          {{ $errors->first('jenis_kelamin') }}
                        </p>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="form-group">
                      <label
                        class="control-label"
                        for="nama"
                      >
                        Status Perkawinan
                      </label>
                      <input
                        type="text"
                        name="nama"
                        class="form-control"
                        id="status-perkawinan"
                        readonly
                      />
                      @if($errors->has('nama'))
                        <p class="text-danger">
                          {{ $errors->first('nama') }}
                        </p>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="form-group">
                      <label
                        class="control-label"
                        for="tempat-lahir"
                      >
                        Agama
                      </label>
                      <input
                        type="text"
                        name="jenis_kelamin"
                        class="form-control"
                        id="agama"
                        readonly
                      />
                      @if($errors->has('jenis_kelamin'))
                        <p class="text-danger">
                          {{ $errors->first('jenis_kelamin') }}
                        </p>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="form-group">
                      <label
                        class="control-label"
                        for="tanggal-lahir"
                      >
                        Pendidikan
                      </label>
                      <input
                        type="text"
                        name="jenis_kelamin"
                        class="form-control"
                        id="pendidikan"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="form-group">
                      <label
                        class="control-label"
                        for="jenis-kelamin"
                      >
                        Pekerjaan
                      </label>
                      <input
                        type="text"
                        name="jenis_kelamin"
                        class="form-control"
                        id="pekerjaan"
                        readonly
                      />
                      @if($errors->has('jenis_kelamin'))
                        <p class="text-danger">
                          {{ $errors->first('jenis_kelamin') }}
                        </p>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                      <label
                        class="control-label"
                        for="alamat"
                      >
                        Alamat
                      </label>
                      <textarea
                        name="alamat"
                        class="form-control"
                        id="alamat"
                        rows="5"
                        readonly
                      ></textarea>
                    </div>
                  </div>
                </div>
                <h4>
                  <b>
                    KETERANGAN SURAT
                  </b>
                </h4>
                <hr />
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                      <label for="">
                        Jenis SKTM
                      </label>
                      <select
                        name=""
                        id="jenis-sktm"
                        class="form-control"
                      >
                        <option value="Kesehatan">
                          Kesehatan
                        </option>
                        <option value="Pendidikan">
                          Pendidikan
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div id="sktm-pendidikan">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                      <div class="form-group">
                        <label for="">
                          Nama Lengkap
                        </label>
                        <input
                          type="text"
                          name="nama"
                          class="form-control"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                      <div class="form-group">
                        <label for="">
                          Nama Sekolah
                        </label>
                        <input
                          type="text"
                          name="nama_sekolah"
                          class="form-control"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                      <div class="form-group">
                        <label for="">
                          Kelas
                        </label>
                        <input
                          type="text"
                          name="kelas"
                          class="form-control"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                      <div class="form-group">
                        <label for="">
                          Jurusan
                        </label>
                        <input
                          type="text"
                          name="jurusan"
                          class="form-control"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-xs-12">
                        <label for="">
                          Alamat Sekolah
                        </label>
                        <textarea
                          name="alamat_sekolah"
                          class="form-control"
                          id=""
                          rows="5"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12">
                        <label
                          class="control-label"
                          for=""
                        >Diwakili Oleh</label>
                        <select
                          name="diwakili_oleh"
                          class="form-control"
                        >
                          <option value="Ayah">Ayah</option>
                          <option value="Ibu">Ibu</option>
                          <option value="Wali">Wali</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                      <label for="">
                        Keterangan Redaksi
                        <button
                          id="ubah-keterangan-redaksi"
                          class="btn btn-sm btn-warning"
                        >
                          <i class="fa fa-pencil"></i> Ubah Keterangan Redaksi
                        </button>
                      </label>
                      <textarea
                        name="redaksi"
                        class="form-control"
                        id="redaksi"
                        rows="5"
                        readonly
                      >Bersangkutan adalah benar sebagai penduduk / warga Desa Cilame yang berdomisili sesuai alamat tersebut di atas dan sepengetahuan kami termasuk kategori tidak mampu (Pra-KS) karena tidak mempunyai penghasilan tetap dan kekayaan yang dapat diandalkan.</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                      <label for="">
                        Keperluan
                      </label>
                      <textarea
                        name="keperluan"
                        class="form-control"
                        id="keperluan"
                        rows="5"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                      <label for="">
                        Ditanda Tangani Oleh
                      </label>
                      <select
                        name="profil_perangkat_id"
                        id=""
                        class="form-control"
                      >
                        <option value="0">
                          -
                        </option>
                        @foreach($perangkat as $item)
                          <option value="{{ $item->id }}">
                            {{ $item->jabatan }} - {{ $item->nama }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <button
                  type="submit"
                  class="btn btn-primary"
                >
                  <i class="fa fa-check"></i> Simpan
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
    src="/assets/js/bootstrap-typehead.min.js"
  ></script>
  <script
    type="text/javascript"
    src="/assets/js/moment.min.js"
  ></script>
  <script
    type="text/javascript"
    src="/assets/js/bootstrap-datetimepicker.min.js"
  ></script>
  <script>
    $('#sktm-pendidikan').hide();
    $('#nik').typeahead({
      source: function(query, process) {
        $.ajax({
            url: '/master/penduduk/api/data-nik',
            type: 'get',
            dataType: 'json',
            success: function(json){
              return process(json)
            }
        });
      },
      autoSelect: true,
      templates: {
        suggestion: function(result){
          return 'Klik Tambah Data Penduduk, jika tidak menemukan data.';
        }
      },
      afterSelect: function(result){
        var nik = $('#nik').val();
        $.ajax({
          url: '/master/penduduk/api/data/'+nik,
          type: 'get',
          dataType: 'json',
          success: function(data){
            $('#master-penduduk-id').val(data.id);
            $('#nama').val(data.nama);
            $('#tempat-lahir').val(data.tempat_lahir);
            $('#tanggal-lahir').val(data.tanggal_lahir);
            $('#jenis-kelamin').val(data.jenis_kelamin);
            $('#status-perkawinan').val(data.status_perkawinan);
            $('#agama').val(data.agama);
            $('#pendidikan').val(data.pendidikan);
            $('#pekerjaan').val(data.pekerjaan);
            $('#alamat').val(data.alamat);
          }
        });
      }
    });
    $('#nama').typeahead({
      source: function(query, process) {
        $.ajax({
            url: '/master/penduduk/api/data-nama',
            type: 'get',
            dataType: 'json',
            success: function(json){
              return process(json)
            }
        });
      },
      autoSelect: true,
      templates: {
        suggestion: function(result){
          return 'Klik Tambah Data Penduduk, jika tidak menemukan data.';
        }
      },
      afterSelect: function(result){
        var nama = $('#nama').val();
        $.ajax({
          url: '/master/penduduk/api/data-by-nama/'+nama,
          type: 'get',
          dataType: 'json',
          success: function(data){
            $('#master-penduduk-id').val(data.id);
            $('#nik').val(data.nik);
            $('#nama').val(data.nama);
            $('#tempat-lahir').val(data.tempat_lahir);
            $('#tanggal-lahir').val(data.tanggal_lahir);
            $('#jenis-kelamin').val(data.jenis_kelamin);
            $('#status-perkawinan').val(data.status_perkawinan);
            $('#agama').val(data.agama);
            $('#pendidikan').val(data.pendidikan);
            $('#pekerjaan').val(data.pekerjaan);
            $('#alamat').val(data.alamat);
          }
        });
      }
    });
    $('#tertanggal-rt').datetimepicker({
      format: 'DD-MM-YYYY'
    });
    $('#tertanggal-rw').datetimepicker({
      format: 'DD-MM-YYYY'
    });
    $('#ubah-keterangan-redaksi').click(function(e){
      e.preventDefault();
      $('#redaksi').prop('readonly', false);
      $('#redaksi').focus();
      $('#ubah-keterangan-redaksi').attr('disabled', true);
    });
    $('#jenis-sktm').change(function(e){
      var jenis_sktm = $('#jenis-sktm').val();

      if (jenis_sktm === "Pendidikan") {
        $('#sktm-pendidikan').show();
      }else{
        $('#sktm-pendidikan').hide();
      }
    });
  </script>
@endsection
