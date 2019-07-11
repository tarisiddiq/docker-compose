<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Mahasiswa</legend>
          <p>
            <label for="nim">NIM : </label>
            <input type="text" name="nim" id="nim" placeholder="Contoh: 12345678">
          </p>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
          </p>
          <p>
            <label for="fakultas" >Fakultas : </label>
              <select name="fakultas" id="fakultas">
                <option value="Kedokteran">Kedokteran </option>
                <option value="MIPA">MIPA</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Teknik">Teknik</option>
                <option value="Sastra">Sastra</option>
                <option value="Hukum">Hukum</option>
              </select>
          </p>
          <p>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
          </p>
          <p >
            <label for="ipk">IPK : </label>
            <input type="text" name="ipk" id="ipk" placeholder="Contoh: 2.75">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
