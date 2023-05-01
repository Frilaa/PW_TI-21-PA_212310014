<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporPak</title>
    <link href="style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<style>
    /* .h1 {
        padding: 10;
        margin: 10;
        font-size: 10;
        color: blue;
    } */
    /* .img {
        border-style: solid;
    } */
    .border{
            display: inline-block;
            width: 300px;
            border: 10px solid;
            padding: 25px ;
            margin-right: 10px;
            text-align: center;
            border-color: blue;
        }
</style>
<body style="background-color: #f5f5dc">
    <nav class="navbar" style="background-color: #f5f5dc;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://assets-a1.kompasiana.com/items/album/2016/10/22/14729260-1324013040952024-5372657298993917764-n-580b5a660323bd572b3fc54c.jpg" width="70">
            <span style = "color: blue">LAPOR PAK!</span></a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <nav class="navbar bg-transparent">
                <form aclass="container-fluid justify-content-end">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Login</button>
                        <button class="btn btn-outline-primary" type="submit">Register</button>
                    </div>
                </form>
            </nav>
        </div>
    </nav>
    <div style="margin-top: 100px; padding-left: 25px">
        <h3><span style="color: blue;">Layanan Pengaduan Masyarakat</span></h3>
        <p>Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="button">Laporkan! </button>
    </div>
    <div class="border">
        <img src="https://cdn.icon-icons.com/icons2/1465/PNG/512/385writinghand1_100201.png" width=100>
        <h5>1. Tulis Laporan</h5>
        <p>Tulis laporan Anda dengan jelas.</p>
    </div>
    <div class="border">
        <img src="https://www.pngfind.com/pngs/m/32-325116_process-4-step-process-png-transparent-png.png" width=80>
        <h5>2. Proses Verifikasi</h5>
        <p>Tunggu sampai laporan Anda di verifikasi.</p>
    </div>
    <div class="border">
        <img src="https://w7.pngwing.com/pngs/602/353/png-transparent-analytic-campaign-follow-up-marketing-online-research-social-media-entrepreneur-solid-high-risk-high-return-icon.png" width=75>
        <h5>3. Tindak Lanjut</h5>
        <p>Laporan Anda sedang dalam tindak lanjut.</p>
    </div>
    <div class="border">
        <img src="https://png.pngtree.com/element_our/20190529/ourlarge/pngtree-finish-icon-image_1198540.jpg" width=80>
        <h5>4. Selesai</h5>
        <p>Laporan pengaduan telah selesai ditindak.</p>
    </div>
</body>
</html>