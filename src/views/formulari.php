<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" type="image/png" href="/img/logo_renting.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Index</title>
</head>
<body class="bg-dark d-flex align-items-center">

<div class="container-md text-center">
<div class="row justify-content-center">
  <div class="col-6">
  <h2 class="text-white">Enllistat</h2>
  <form action="index.php?r=form" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label text-white">Nom</label>
        <input  class="form-control" id="nom" name="al-nom">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white">Cognom</label>
        <input type="text" class="form-control" id="Cognom" name="al-cog" aria-describedby="cognomhelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white">Data Naixament</label>
        <input  class="form-control" id="Datan" name="al-data">
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="exampleInputPassword1" class="form-label text-white">Carrer</label>
            <input  class="form-control" id="Carrer" name="al-carrer">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleInputPassword1" class="form-label text-white">Numero</label>
            <input  class="form-control" id="exampleInputPassword1" name="al-num">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="exampleInputPassword1" class="form-label text-white">Ciutat</label>
            <input  class="form-control" id="exampleInputPassword1" name="al-ciutat">
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleInputPassword1" class="form-label text-white">Codi Postal</label>
            <input  class="form-control" id="exampleInputPassword1" name="al-codip">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">¡Enviar!</button>
</form>

</div>
  </div>
</div>



   
 
    
    <script src="/script/script.js"></script>
</body>
</html>