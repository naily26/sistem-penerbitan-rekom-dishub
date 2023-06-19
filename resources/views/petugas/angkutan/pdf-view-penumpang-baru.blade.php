<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><strong><span style="font-family:'Arial
        Narrow';">&nbsp;&nbsp;</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:18pt;"><strong><span
                style="font-family:'Arial Narrow';">S
                U R A T</span></strong><strong><span
                style="font-family:'Arial Narrow';">&nbsp;&nbsp;&nbsp;&nbsp;</span></strong><strong><span
                style="font-family:'Arial Narrow';">K E T E R A N G A N</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><strong><span
                style="font-family:'Arial Narrow';">PERUNTUKAN
                ANGKUTAN PENUMPANG UMUM</span></strong></p>
    <p style="margin-top:0pt; margin-bottom:12pt; text-align:center;"><strong><span
                style="font-family:'Arial Narrow';">Nomor : {{$detail->nomor_rekomendasi_peruntukan}}</span></strong>
    </p>
    <p style="margin-top:12pt; margin-bottom:0pt; text-indent:45.1pt; text-align:justify;"><span
            style="font-family:'Arial Narrow';">Yang
            bertanda tangan dibawah ini Kepala Bidang Angkutan Jalan bertindak atas nama Kepala Dinas Perhubungan
            Provinsi Jawa Timur,
            berdasarkan :</span></p>
    <table cellspacing="0" cellpadding="0" style="width:518.4pt; border-collapse:collapse;">
        <tbody>
            <tr>
                <td style="width:9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">1.</span></p>
                </td>
                <td style="width:487.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">Surat permohonan Pimpinan&nbsp;</span><strong><span
                            style="font-family:'Arial Narrow';">{{$detail->angkutan->perusahaan->nama_perusahaan}}&nbsp;</span></strong><span
                            style="fontfamily:'Arial Narrow';">nomor&nbsp;</span><strong><span
                            style="font-family:'Arial Narrow';">{{$detail->nomor_permohonan}}</span></strong><span
                            style="fontfamily:'Arial Narrow';">tanggal</span><strong><span
                            style="font-family:'Arial Narrow';">&nbsp;<?php echo tanggal_indonesia($detail->tanggal_permohonan); ?></span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">2.</span></p>
                </td>
                <td style="width:487.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">Nomor Induk Berusaha (NIB) Perizinan Berusaha Berbasis Risiko dari Kepala Badan Koordinasi Penanaman
                            Modal Republik
                            Indonesia Nomor&nbsp;</span><strong><span
                            style="font-family:'Arial Narrow';">{{$detail->angkutan->perusahaan->nib}}&nbsp;</span></strong><span
                            style="font-family:'Arial
        Narrow';">tanggal&nbsp;</span><strong><span
                                style="fontfamily:'Arial Narrow';"><?php echo tanggal_indonesia($detail->angkutan->perusahaan->tanggal_nib); ?></span></strong><span
                            style="font-family:'Arial Narrow';">.</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">3.</span></p>
                </td>
                <td style="width:487.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:3pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">Sertifikat Registrasi Uji Tipe dari Direktur Jenderal Perhubungan Darat nomor&nbsp;</span><strong><span
                            style="font-family:'Arial
        Narrow';">{{$detail->angkutan->nomor_srut}}&nbsp;</span></strong><span style="font-family:'Arial Narrow';">tanggal</span><strong><span
                            style="font-family:'Arial Narrow';">&nbsp;<?php echo tanggal_indonesia($detail->angkutan->tanggal_srut); ?>
                        </span></strong></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:2pt; margin-bottom:0pt; text-align:justify;"><span
            style="font-family:'Arial Narrow';">Menerangkan bahwa
            kendaraan bermotor sebagaimana tersebut dibawah ini :</span></p>
    <table cellspacing="0" cellpadding="0" style="width:510.3pt; border-collapse:collapse;">
        <tbody>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">a.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Nomor
                            Kendaraan</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
                        Narrow';">{{$detail->angkutan->nomor_kendaraan}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">b.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Nomor
                            Uji</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">

                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
                        Narrow';">{{$detail->angkutan->nomor_uji}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">c.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Nomor
                            Faktur</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
                        Narrow';">{{$detail->angkutan->nomor_faktur}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">d.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Tanggal
                            Faktur</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span
                        style="font-family:'Arial Narrow';"><?php echo tanggal_indonesia($detail->angkutan->tanggal_faktur); ?></span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">e.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Merk /
                            Type</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">

                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
Narrow';">{{$detail->angkutan->merk}}</span></strong><span style="font-family:'Arial Narrow';">&nbsp;/&nbsp;</span><strong><span
                                style="font-family:'Arial Narrow';">{{$detail->angkutan->tipe}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">f.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Tahun
                            Pembuatan</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
Narrow';">{{$detail->angkutan->tahun_pembuatan}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">g.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Jenis</span>
                    </p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span
                                style="font-family:'Arial Narrow';">{{$detail->angkutan->jenis}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">h.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">

                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Nomor
                            Rangka</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
Narrow';">{{$detail->angkutan->nomor_rangka}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">i.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Nomor
                            Mesin</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
Narrow';">{{$detail->angkutan->nomor_mesin}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">j.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Nama
                            Perusahaan</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span
                                style="font-family:'Arial Narrow';">{{$detail->angkutan->perusahaan->nama_perusahaan}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">

                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">k.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Nama Pemilik
                            Kend</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span
                                style="font-family:'Arial Narrow';">{{$detail->angkutan->nama_pemilik}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">l.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Alamat</span>
                    </p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; text-align:justify; font-size:11.5pt;"><strong><span
                                style="font-family:'Arial Narrow';">{{$detail->angkutan->perusahaan->alamat}}</span>
                        </strong></p>

                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">m.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Status</span>
                    </p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
Narrow';">Umum</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">n.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Warna
                            TNKB</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span
                                style="font-family:'Arial Narrow';">{{$detail->angkutan->warna_tnkb}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">o.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">Peruntukan</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
Narrow';">{{$detail->angkutan->perusahaan->kbli->kategori}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">p.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">Kode
                            KBLI</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><strong><span style="font-family:'Arial
Narrow';">{{$detail->angkutan->perusahaan->kbli->kode}}</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:16.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">q.</span></p>
                </td>
                <td style="width:89.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span style="font-family:'Arial
        Narrow';">Keterangan</span></p>
                </td>
                <td style="width:7.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; font-size:12pt;"><span
                            style="font-family:'Arial Narrow';">:</span></p>
                </td>
                <td style="width:353.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:2pt; margin-bottom:0pt; text-align:justify; font-size:12pt;"><strong><span
                                style="font-family:'Arial Narrow';">{{$detail->keterangan}}</span></strong><span
                            style="font-family:'Arial Narrow';">.</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:6pt; margin-bottom:0pt; text-indent:45pt; line-height:150%;"><span
            style="font-family:'Arial Narrow';">Demikian
            untuk dapat dipergunakan sebagaimana mestinya.&nbsp;</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:6pt; text-indent:28.35pt;"><span style="font-family:'Arial
        Narrow';">Surabaya,&nbsp;</span><strong><span style="font-family:'Arial Narrow';"><?php echo tanggal_indonesia($today); ?></span></strong></p>
    <p style="margin-top:6pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center;"><span
            style="font-family:'Arial Narrow';">An.
            KEPALA DINAS PERHUBUNGAN</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center;"><span style="font-family:'Arial
        Narrow';">PROVINSI JAWA TIMUR</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center;"><span
            style="font-family:'Arial Narrow';">Plt.
            Kepala Bidang Angkutan Jalan</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center;"><span style="font-family:'Arial
        Narrow';">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center; font-size:16pt;"><span
            style="fontfamily:'Arial Narrow';">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center; font-size:8pt;"><span style="font-family:'Arial
        Narrow';">&nbsp;</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center;"><u><span style="font-family:'Arial
        Narrow';">Drs. PADELAN, M.Si</span></u></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center;"><span style="font-family:'Arial
        Narrow';">Pembina Tingkat I</span></p>
    <p style="margin-top:0pt; margin-left:276.45pt; margin-bottom:0pt; text-align:center;"><span style="font-family:'Arial
        5/8/23, 3:09 PM Convert Word and PDF files to HTML | Free online HTML editor
        https://wordtohtml.net 9/10
        Narrow';">NIP.&nbsp;</span><span style="font-family:'Arial Narrow'; font-size:11.5pt;">19651117 199202 1
            002</span></p>
    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Arial Narrow';">Lembaran
            :</span></p>
    <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
        <tbody>
            <tr>
                <td style="width:12.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">1.</span></p>
                </td>
                <td style="width:219.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">Pemilik
                            Kendaraan</span></p>
                </td>
            </tr>
            <tr>
                <td style="width:12.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">2.</span></p>
                </td>
                <td style="width:219.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">Samsat {{$detail->tembusan}};
                        </span></p>
                </td>
            </tr>
            <tr>
                <td style="width:12.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">3.</span></p>
                </td>
                <td style="width:219.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">Arsip.</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:12.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">&nbsp;</span>
                    </p>
                </td>
                <td style="width:219.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span
                            style="font-family:'Arial Narrow';">&nbsp;</span>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
</body>

</html>

<?php 
        function tanggal_indonesia($tanggal){
        $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
        );
        
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
         
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?>

