<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Pasien COVID-19</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <table>
        <tr>
          <td>Wilayah</td>
          <td> : </td>
          <td>
            <select class="" name="wilayah">
              <option value="DKI Jakarta">DKI Jakarta</option>
              <option value="Jawa Barat">Jawa Barat</option>
              <option value="Banten">Banten</option>
              <option value="Jawa Tengah">Jawa Tengah</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Jumlah Pasien Positif</td>
          <td> : </td>
          <td><input type="number" name="positif"></td>
        </tr>
        <tr>
          <td>Jumlah Pasien Dirawat</td>
          <td> : </td>
          <td><input type="number" name="dirawat"></td>
        </tr>
        <tr>
          <td>Jumlah Pasien Sembuh</td>
          <td> : </td>
          <td><input type="number" name="sembuh"></td>
        </tr>
        <tr>
          <td>Jumlah Pasien Meninggal</td>
          <td> : </td>
          <td><input type="number" name="meninggal"></td>
        </tr>
        <tr>
          <td>Operator</td>
          <td> : </td>
          <td><input type="text" name="operator"></td>
        </tr>
        <tr>
          <td>NIM</td>
          <td> : </td>
          <td><input type="text" name="nim"></td>
        </tr>
      </table>
      <input type="submit" name="submit" value="Input Data">
    </form>

    <br>

    <?php if (isset($_POST['submit'])): ?>
      <?php echo "<center>"; ?>
      <?php echo "Data Pemantauan Covid19 wilayah ".$_POST['wilayah']."<br>"; ?>
      <?php echo "Per ". date('d M Y H:i:s')."<br>"; ?>
      <?php echo $_POST['operator']."/".$_POST['nim']."<br><br>" ?>
      <?php echo "</center>"; ?>
      <?php echo "<table border=1 width=100%>
                    <tr>
                      <td>Positif</td>
                      <td>Dirawat</td>
                      <td>Sembuh</td>
                      <td>Meninggal</td>
                    </tr>";
      ?>
      <?php echo "  <tr>
                      <td>".$_POST['positif']."</td>
                      <td>".$_POST['dirawat']."</td>
                      <td>".$_POST['sembuh']."</td>
                      <td>".$_POST['meninggal']."</td>
                    </tr>
                  </table>";
      ?>
    <?php endif; ?>

  </body>
</html>
