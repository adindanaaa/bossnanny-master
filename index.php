<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>BOSSNANNY</title>
    
</head>
<body>
    <?php include ("header.php") ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
        <img src="_assets/img/perawat.jpg" style="width: 100%; height: 400px; object-fit: cover; position: relative;">
                <div class="center text-white" style="position: absolute;
                    top: 25%;
                    width: 100%;
                    text-align: center;
                    font-size: 70px;">BOSSNANNY</div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" style="background-color: #93C8F0;">
                <h4 class="text-white text-center">Pilih Perawat Anda</h4>
            </div>

            <div class="card-body">
            <form id="form" method="post">
            <div class="alert alert-primary">
                <strong>Perawat Terbaik Ada Disini</strong>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Perawat</label>
                        <select name="perawat" class="form-control mb-2" style="border-radius:40px">
                        <option value="art">ART</option>
                        <option value="nannu">Nanny</option>
                        <option value="lansia">Perawat Lansia</option>
                    </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control mb-2" style="border-radius:40px">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Durasi</label>
                        <select name="jenis_kelamin" class="form-control mb-2" style="border-radius:40px">
                        <option value="sebulan">1 Bulan</option>
                        <option value="2_Bulan">2 Bulan</option>
                    </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Lokasi Pasien</label>
                        <select name="lokasi_pasien" class="form-control mb-2" style="border-radius:40px">
                        <option value="Jatim">Jawa Timur</option>
                        <option value="Jabar">Jawa Barat</option>
                        <option value="Jateng">Jawa Tengah</option>
                        <option value="Bali">Bali</option>
                    </select>
                    </div>
                </div>
                    

                
                </div>
            </div>
            <button type="submit" class="text-white text-center btn btn-block" style="background-color: #93C8F0; border-radius:40px"
                    name="simpan">
                        Simpan
                    </button>
            </form>
        </div>
   
    </div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>