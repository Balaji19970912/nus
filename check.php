<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Check DataTable</title>
    <link
      rel="stylesheet"
      href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"
    />
  </head>
  <body>
    <table class="myTable">
      <thead>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>ACCOUNT STATUS</th>
      </thead>
      <tr>
        <td>Ronald L Newman</td>
        <td>ronaldnnewman@nusconsulting.com</td>
        <td>invited</td>
      </tr>
      <tr>
        <td>Cheryl W Harris</td>
        <td>CherylWHarris@nusconsulting.com</td>
        <td>Confirmed</td>
      </tr>
      <tr>
        <td>Pat G Hernandez</td>
        <td>PatGHernandez@nusconsulting.com</td>
        <td>invited</td>
      </tr>
      <tr>
        <td>Wanda K Spence</td>
        <td>WandaKSpence@nusconsulting.com</td>
        <td>invited</td>
      </tr>
      <tr>
        <td>Williemae S Feather</td>
        <td>WilliemaeSFeather@nusconsulting.com</td>
        <td>Confirmed</td>
      </tr>
      <tr>
        <td>Jonathan M Pearson</td>
        <td>JonathanMPearson@nusconsulting.com</td>
        <td>invited</td>
      </tr>
      <tr>
        <td>Jerome L Troyer</td>
        <td>JeromeLTroyer@nusconsulting.com</td>
        <td>invited</td>
      </tr>
      <tr>
        <td>EleanorJ Litton</td>
        <td>EleanorJLitton@nusconsulting.com</td>
        <td>Confirmed</td>
      </tr>
      <tr>
        <td>Jessica J Martinez</td>
        <td>JessicaJMartinez@nusconsulting.com</td>
        <td>invited</td>
      </tr>
      <tr>
        <td>Julio M Girouard</td>
        <td>JulioMGirouard@nusconsulting.com</td>
        <td>Confirmed</td>
      </tr>
      <tr>
        <td>Douglas L Banks</td>
        <td>DouglasLBanks@nusconsulting.com</td>
        <td>invited</td>
      </tr>
    </table>
  </body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".myTable").DataTable();
    });
  </script>
</html>
