<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='true' name='MSSmartTagsPreventParsing' />

    <title>Pengiriman</title>
    <link rel="shortcut icon" href="fav.png" />
    <link href="https://gopaysender.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Quicksand', sans-serif;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <?php
    session_start();

    require_once('../modul/koneksi.php');
    $jum = voc_kosong();
    ?>

    <div class="container">

        <div class="row">
            <br>
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-send"></i> Formulir</h3>
                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="kirim_act.php">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Data Lengkap</label>
                                <div class="col-md-10">
                                    <textarea name="data" class="form-control" rows="15%"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <div class="pull-right">

                                        <button type="submit" name="submit" class="btn btn-info">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <center>
            <div class="form-group">
                <a class="btn btn-success" href="index.php">Kembali</a> <br>
            </div>


</body>


<script>
    window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}
</script>