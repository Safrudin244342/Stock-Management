<style>
#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<table id="table">
  <tr>
    <?php
        foreach($tableHeaders as $header) {
            echo "<th>" . $header . "</th>";
        }

        if (isset($tableCommands)) {
            echo "<th>Command</th>";
        }
    ?>
  </tr>
  <?php
    while($coloum = $tableColoums->fetch_assoc()){
        echo "<tr>";
        foreach($coloum as $value) {
            echo "<td>" . $value . "</td>";
        }
        if (isset($tableCommands)) {
            echo "<td>";
            foreach($tableCommands as $command) {
                echo "<a href='./" . $command . "product?productId=" . $coloum['id'] . "' class='button'>" . $command . "</a>";
            }
            echo "</td>";
        }
        echo "</tr>";
    }
  ?>
</table>
