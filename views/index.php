<html>
<head>
<title>Latihan MVC - UAG</title>
<link rel="stylesheet" href="/latihan-week9/assets/css/bootstrap.css" />
<script type="text/javascript" src="/latihan-week9/assets/js/bootstrap.js"></script>
</head>
<body>
<div class="row">
<div class="col-md-12">
<div class="col-md-4">&nbsp;</div>
<div class="col-md-4"><h3>Isikan data Anda di sini</h3>
<form method="post" action="/latihan-week9/?act=simpan">
<div class="form-group">
<label for="exampleInputNim">NIM</label>
<input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="NIM">
</div>
<div class="form-group">
<label for="exampleInputNama">Nama</label>

<input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama">
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
<br/>
<a href="/latihan-week9/?act=tampil-data">Lihat Hasil Input</a>
</div>
<div class="col-md-4">&nbsp;</div>
</div>
</div>
</body>
</html>