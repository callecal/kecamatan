<html>
<head>
  <meta
    http-equiv="Content-Type"
    content="text/html; charset=utf-8"
  />
  <style>
    @font-face {
      font-family: 'Times New Roman';
      src: url({{ storage_path('fonts/times-new-roman.ttf') }}) format("truetype");
    }
    body{
      font-family: 'Times New Roman';
      margin-left: 45px;
      margin-right: 45px;
    }
    .header {
      text-align: center;
      position: relative;
    }
    .header img {
      position: absolute;
      margin-top: 3px;
    }
    .title {
      text-align: center;
    }
    .underline {
      text-decoration: underline;
      text-transform: uppercase;
    }
    .redaksi-awal {
      /*text-indent: 2.5%;*/
    }
    .text-redaksi-awal{
      text-indent: 2.5%;
    }
    .muatan-data {

    }
    .redaksi-akhir{

    }
  </style>
  <title>Surat SKCK</title>
</head>
<body>
  <div class="header">
    <img
      src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/assets/img/logo-bandung-barat@grayscale.jpg' ?>"
      height="75"
      style=""
    />
    <h3 style="margin: 0; padding: 0; text-transform: uppercase;">
      Pemerintahan Kabupaten {{ $profil->kabupaten }} <br />
      Kecamatan {{ $profil->kecamatan }}<br />
      Desa {{ $profil->desa }}
    </h3>
    <small style="margin: 0; padding: 0;">
      <b>
        {{ $profil->alamat }}
      </b>
    </small>
  </div>
  <hr size="4" style="margin: 0; padding: 0;"/>
  <div class="title">
    <h4 class="underline" style="margin: 0; padding: 10;">
       surat keterangan kematian
    </h4>
    <p style="margin: 0; padding: 0;">
      <b>
        Nomor : 474/{{ $total }}/Ds./IX/2019
      </b>
    </p>
  </div>
  <div class="muatan-data">
    <p style="text-indent: 2.5%; margin: 0; padding: 0;">
      Kepala Desa Cilame Kecamatan Ngamprah Kabupaten Bandung Barat dengan ini menerangkan bahwa :
    </p>
    <table style="padding-left: 5%;">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td style="text-transform: uppercase;">
          <b>{{ $keteranganKematian->nama }}</b>
        </td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ $keteranganKematian->jenis_kelamin }}</td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td>{{ $keteranganKematian->tempat_lahir }}, {{ $keteranganKematian->tanggal_lahir }}</td>
      </tr>
    </table>
    <p style="text-indent: 2.5%;">
      Telah Meninggal Dunia Pada :
    </p>
    <table style="padding-left: 5%;">
      <tr>
        <td>Hari</td>
        <td>:</td>
        <td>{{ $keteranganKematian->hari_meninggal }} / {{ $keteranganKematian->jam_meninggal === null ? '' : $keteranganKematian->jam_meninggal }}</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>{{ $keteranganKematian->tanggal_meninggal }}</td>
      </tr>
      <tr>
        <td>Di</td>
        <td>:</td>
        <td>{{ $keteranganKematian->alamat_meninggal }}</td>
      </tr>
      <tr>
        <td>Penyebab Kematian</td>
        <td>:</td>
        <td>{{ $keteranganKematian->penyebab_meninggal }}</td>
      </tr>
    </table>
    <p style="text-indent: 2.5%;">
      Surat keterangan ini dibuat berdasarkan keterangan Pelapor :
    </p>
    <table style="padding-left: 5%;">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $keteranganKematian->penduduk->nama }} </td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ $keteranganKematian->penduduk->jenis_kelamin }}</td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td>{{ $keteranganKematian->penduduk->tempat_lahir }}, {{ $keteranganKematian->penduduk->tanggal_lahir }}</td>
      </tr>
      <tr>
        <td>No. KK / NIK</td>
        <td>:</td>
        <td>- / {{ $keteranganKematian->penduduk->nik }}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $keteranganKematian->penduduk->alamat }}</td>
      </tr>
    </table>
  </div>
  <div class="keterangan">
    <p style="text-indent: 2.5%;">
      Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya dan akan diadakan perubahan atau pembatalan jika terdapat kekeliruan.
    </p>
  </div>
  <div class="tanda-tangan">
    @if($keteranganKematian->jenis_sktm == "Kesehatan")
      <table align="left">
        <tr>
          <td><center>Mengetahui,</center></td>
        </tr>
        <tr>
          <td>
            <center>
              <b style="text-transform: uppercase;">
                camat ngamprah
              </b>
            </center>
          </td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td style="text-transform: uppercase;" width="200">
            <center>
              <b>
                <hr style="margin-top: 15px" />
              </b>
            </center>
          </td>
        </tr>
      </table>
    @endif
    <table align="right">
      <tr>
        <td><center>Cilame, {{ $date }}</center></td>
      </tr>
      <tr>
        <td>
          <center>
            <b style="text-transform: uppercase;">
              {{ $keteranganKematian->profil_perangkat->jabatan }}
            </b>
          </center>
        </td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td style="text-transform: uppercase;" width="200">
          <center>
            <b>
              <u>
                {{ $keteranganKematian->profil_perangkat->nama }}
              </u>
            </b>
          </center>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
