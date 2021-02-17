<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap 4.6.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <form action="calc.php" method="POST">
        <div class="col-md-3">
            <label class="form-label">Sayı:</label>
            <input type="text" class="form-control" name="sayi1">
        </div>
        <div class="col-md-3">
            <label class="form-label">Sayı 2:</label>
            <input type="text" class="form-control" name="sayi2">
        </div>
        <div class="col-md-3">
            <label class="form-label">İşlem</label>
            <select class="custom-select" name="islem">
                <option value="topla">Topla</option>
                <option value="cikar">Çıkar</option>
                <option value="carp">Çarp</option>
                <option value="bol">Böl</option>
            </select>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Hesapla</button>
        </div>
    </form>
</body>

</html>