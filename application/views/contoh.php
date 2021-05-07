<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
    
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .gridcontainer {
        display: grid;
        grid-template-columns: 1fr 0.7fr 0.6fr;
        grid-template-rows: repeat(9, auto);
        border: 1px solid black;
    }

    .gridchild {
        border: 1px solid black;
    }

    .box-fill {
        border: 1px solid black;
        padding: 5px;
        width: 10px;
        text-align: center;
    }

    .special-box-fill {
        padding: 5px;
    }

    .table-mp {
        font-size: 11px;
        border-collapse: collapse;
        width: 100%;
    } 
    
    .table-mp tr td,.table-mp tr th {
        border: 2px solid black ;
    }

    body > div > div > div:nth-child(4) > table > tbody > tr > td:nth-child(3) > div.box-fill:nth-child(3) {
        margin-left: 14px;
    }
    body > div > div > div:nth-child(4) > table > tbody > tr > td:nth-child(3) > div.box-fill:nth-child(6) {
        margin-left: 14px;
    }
    body > div > div > div:nth-child(4) > table > tbody > tr > td:nth-child(3) > div.box-fill:nth-child(9) {
        margin-left: 14px;
    }
    body > div > div > div:nth-child(4) > table > tbody > tr > td:nth-child(3) > div.box-fill:nth-child(10) {
        margin-left: 14px;
    }
    body > div > div > div:nth-child(4) > table > tbody > tr > td:nth-child(3) > div.box-fill:nth-child(13) {
        margin-left: 14px;
    }
    

    </style>

</head>
<body id="content" >
    <div style="max-width: 610px; border: 1px solid black;">
        <div class="gridcontainer">
            <div class="gridchild" style="display: flex;">
                <img src="<?php echo base_url()?>assets/images/logokemenkeu.png" style="height: 95px; width: auto;"/>
                <p style="font-size: 12px; text-align: center; margin: auto; font-weight: bold;">DEPARTEMEN KEUANGAN R.I <br>DIREKTORAT JENDERAL PAJAK</p>
            </div>
            <div class="gridchild" style="text-align: center;">
                <h1 style="font-size: 15px; font-weight: bold;">SURAT SETORAN PAJAK</h1>
                <p style="font-size: 31px;
                font-weight: bold;
                margin: 15px 0 11px 0;">(SPP)</p>
            </div>
            <div class="gridchild" style="position: relative;">
                <p style="line-height: 4;
                padding: 0 36px; font-weight: bold;">LEMBAR</p><div style="height: 27px;
                width: 27px;
                border: 4px solid black;
                padding: 3px;
                margin-left: 12px;
                position: absolute;
                font-size: 23px;
                top: 12px;
                right: 15px;
                text-align: center;">1</div>
            </div>
            <div class="gridchild" style="grid-column-start: 1;
            grid-column-end: 4; padding: 23px 19px 12px 19px;">
                <table style="font-size: 11px;">
                    <tr>
                        <td style="width: 85px; font-weight: bold;">NPWP</td>
                        <td>:</td>
                        <td style="display: flex;">
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px; font-style: italic;" colspan="3">Diisi sesuai dengan Nomor Pokok Wajib Pajak yang dimiliki</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;padding: 13px 0px;"">NAMA WP</td>
                        <td>:</td>
                        <td>CV. KARUNIA UTAMA</td> 
                    </tr>
                    <tr>
                        <td style="font-weight: bold;"">ALAMAT WP</td>
                        <td>:</td>
                        <td>JL. PAL PUTIH NO.182A RT.001/RW.002 JAKARTA PUSAT</td> 
                    </tr>
                </table>
            </div>
            <div class="gridchild" style="grid-column-start: 1;
            grid-column-end: 4; padding: 23px 19px 12px 19px;">
                <table style="font-size: 11px;">
                    <tr>
                        <td style="width: 85px; font-weight: bold;">NOP</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px; font-style: italic;" colspan="3">Diisi sesuai dengan Nomor Objek Pajak</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;padding: 13px 0px;"">ALAMAT OP</td>
                        <td>:</td>
                        <td style="text-decoration: underline dotted;">JL. PAL PUTIH NO.182A RT.001/RW.002 JAKARTA PUSAT</td> 
                    </tr>
                </table>
            </div>
            <div class="gridchild" style="display: flex;font-size: 11px; place-content: space-around;">
                <div style="text-align: center;">
                    <p>Kode Akun Pajak</p>
                    <div style="display: flex;">
                        <div class="box-fill">1</div>
                        <div class="box-fill">1</div>
                        <div class="box-fill">1</div>
                        <div class="box-fill">1</div>
                        <div class="box-fill">1</div>
                        <div class="box-fill">1</div>
                    </div>
                </div>
                <div style="text-align: center;">
                    <p>Kode Jenis Setoran</p>
                    <div style="display: flex;place-content: center;">
                        <div class="box-fill">1</div>
                        <div class="box-fill">1</div>
                        <div class="box-fill">1</div>
                    </div>
                </div>
            </div>
            <div class="gridchild" style="grid-column-start: 2;grid-column-end: 4; padding: 10px; font-size: 11px;">
                <p><span style="font-weight: bold;">Uraian Pembayaran </span> <span style="text-decoration: underline dotted;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsum impedit temporibus, assumenda, sunt quisquam facere optio quam sed maiores necessitatibus qui vero accusantium mollitia enim fugiat? Ducimus, earum? Nihil?</span></p>
            </div>
            <div class="gridchild" style="text-align: center;grid-column-start: 1;
            grid-column-end: 3;padding: 0px 7px 5px 7px;">
                <p style="font-size: 11px; font-weight: bold;margin: 4px;">Masa Pajak</p>
                <table class="table-mp" style="height: 80px;">
                    <tr>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>Mei</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Ags</th>
                        <th>Sep</th>
                        <th>Okt</th>
                        <th>Nov</th>
                        <th>Des</th>
                    </tr>
                    <tr>
                        <td>x</td>
                        <td>x</td>
                        <td>xxx</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                </table>
            </div>
            <div class="gridchild" style="text-align: center;padding: 0px 7px 5px 7px;">
                <p style="font-size: 11px; font-weight: bold;">Tahun Pajak</p>
                <table class="table-mp" style="height: 30px;">
                    <tr>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                </table>
            </div>
            <div class="gridchild" style="grid-column-start: 1;
            grid-column-end: 4; padding: 23px 19px 12px 19px;">
                <table style="font-size: 11px;">
                    <tr>
                        <td style="width: 85px; font-weight: bold;">Nomor Keterangan</td>
                        <td>:</td>
                        <td style="display: flex;">
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <span style="line-height: 2;
                            padding: 0 4px;">/</span>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <span style="line-height: 2;
                            padding: 0 4px;">/</span>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <span style="line-height: 2;
                            padding: 0 4px;">/</span>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                            <span style="line-height: 2;
                            padding: 0 4px;">/</span>
                            <div class="box-fill">1</div>
                            <div class="box-fill">1</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 9px; font-style: italic;" colspan="3">Diisi sesuai Nomor Ketetapan : STP, SKPKB, SKPKBT</td>
                    </tr>
                </table>
            </div>
            <div class="gridchild" style="grid-column-start: 1;
            grid-column-end: 4; padding: 23px 19px 12px 19px;">
                <table style="font-size: 11px; width: 100%;">
                    <tr>
                        <td style="width: 30%; font-weight: bold;">Jumlah Pembayaran</td>
                        <td>:</td>
                        <td>
                            Rp.41.000
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Terbilang</td>
                        <td>:</td>
                        <td>
                            Empat Puluh Satoe Reboe Roepiah
                        </td>
                    </tr>
                </table>
            </div>
            <div class="gridchild" style="text-align: center;">
                <p style="font-size: 11px; font-weight: bold; margin: 1px;">Diterima oleh Kantor Penerima Pembayaran</p>
                <p style="font-size: 11px; font-weight: bold; margin: 1px;">Tanggal <span style="text-decoration: underline dotted;">tanggal disini</span></p>
                <p style="font-size: 9px; font-style: italic;">Cap dan tanda tangan</p>
                <p style="font-size: 11px; font-weight: bold; margin: 1px; margin-top: 4em;">Nama Jelas : <span style="text-decoration: underline dotted; font-weight: 600;">Lorem ipsum dolor sit</span></p>
            </div>
            <div class="gridchild" style="grid-column-start: 2;
            grid-column-end: 4;text-align: center;">
                <p style="font-size: 11px; font-weight: bold; margin: 1px;">Wajib Pajak/Penyetor</p>
                <p style="font-size: 11px; font-weight: bold; margin: 1px;">Jakarta, 16 April 2021</p>
                <p style="font-size: 9px; font-style: italic;">Bendahara Pengeluaran</p>
                <p style="font-size: 11px; margin-top: 4em; margin-bottom: 1px;">Sultoni Mubin, S.H.</p>
                <p style="font-size: 11px; font-weight: bold; margin: 1px;">NRP : <span style="font-weight: 300;">21312414124141421</span></p>
            </div>
            <div class="gridchild" style="grid-column-start: 1;
            grid-column-end: 4;text-align: center; position: relative;">
                <p style="font-size: 11px; margin-bottom: 2px;">" Terima kasih Telah Membayar Pajak-Pajak Untuk Pembangunan Bangsa "</p>
                <p style="font-size: 11px; font-weight: bold; margin-top: 2px;">Ruang Validasi Kantor Penerima Pembayaran</p>
                <p style="position: absolute; bottom: 2px; left: 2px;font-size: 11px;margin: 0;">F.2.03.NUMBER</p>
            </div>
        </div>
    </div>
    <button id="btnprint">Print this Page</button>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script>
        $(document).ready(function(){
           
            $("#btnprint").click(function(){
                var HTML_Width = $("body").width();
                var HTML_Height = $("body").height();
                var top_left_margin = 15;
                var PDF_Width = HTML_Width + (top_left_margin * 2);
                var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
                var canvas_image_width = HTML_Width;
                var canvas_image_height = HTML_Height;

                var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

                html2canvas($("body")[0]).then(function (canvas) {
                    var imgData = canvas.toDataURL("image/jpeg", 1.0);
                    var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
                    for (var i = 1; i <= totalPDFPages; i++) { 
                        pdf.addPage(PDF_Width, PDF_Height);
                        pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
                    }
                    pdf.save("Your_PDF_Name.pdf");
                });
            })
        });

    </script>
</body>
</html>