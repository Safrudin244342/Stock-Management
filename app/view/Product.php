<style>
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

<?php
    require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/material/navbar.php");
    echo "<br>";
    require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/material/table.php");
    echo "<br>";
    echo "<a href='./addproduct' class='button'>Add Product</a>";
?>