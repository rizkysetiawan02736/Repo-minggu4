<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="fcalc">
  <table style="width:50%;"border="0";
    <tr>
      <td> Bil 1 </td>
      <td><input type="number" name="bil1"></td>
    </tr>
    <tr>
      <td> Bil 2 </td>
      <td><input type="number" name="bil2"></td>
    </tr>
      <tr>
        <td> Operator </td>
        <td>
        <select name="op">
          <option value="+"> + (Tambah) </option>
          <option value="-"> - (Kurang) </option>
          <option value="*"> * (Kali) </option>
          <option value="/"> / (Bagi) </option>
        </select>
     </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> <input type="submit" value="kirim" name="fsubmit"></td>
    </tr>
  </table>
</form>
  <!-- Hasil Submit Form -->
  <?php
      if ($_SERVER["REQUEST_METHOD"]=="POST"){
        var_dump($_POST);
        }
  ?>
</body>
</html>
