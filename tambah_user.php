<!DOCTYPE html>
<html>
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
    <title></title>
</head>
 
<body>
    <div class="container mt-5 pt-5">
        <h3 class="mb-4"> Tambah User </h3>
 
        <form action="proses_tambah_user.php" method="post">
            <div class="form-group mb-3">
                <label for="input-nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="input-nama">
            </div>
            <div class="form-group mb-3">
                <label for="input-username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="input-username"></input>
            </div>
            <div class="form-group mb-3">
                <label for="input-password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="input-password"></input>
            </div>
            <div class="form-group mb-3">
                <label for="input-level" class="form-label">Role</label><br>
                <input type="radio" name="role" value="admin" checked> Admin<br>
                <input type="radio" name="role" value="kasir"> Kasir<br>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
 
</html