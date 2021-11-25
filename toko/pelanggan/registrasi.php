<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="Stylesheet" href="stylesheet.css"/>
</head>
<body >
    <div class="container">
        <div class="card-header">
            <h2>REGISTRASI AKUN</h2>
        </div>
        <div class="card-body">
            <form action="proses_registrasi.php" method="POST">
                <label for ="username" class="form-label">nama :</label>
                <input type="text" name="nama" value="" class="form-control">
                <label for ="alamat" class="form-label">alamat :</label>
                <textarea name="alamat" class = "form-control"></textarea>
                <label for ="telpon" class = "form-label">telpon :</label>
                <input type="text" name="telpon" value="" class="form-control">
                <label for ="password" class = "form-label">password :</label>
                <input type ="password" name="password" value="" class="form-control">
                <br></br>
                <Input type="submit" name="simpan" value = "DAFTAR" class="btn btn-primary" required>
            </form>
        </div>
    </div>
</body>
</html>