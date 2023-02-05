<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<div class="topnav">
  <?php
    $path = "/";
    $userRole = "staff";
    if (isset($_SERVER['REQUEST_URI'])) $path = $_SERVER['REQUEST_URI'];
    if (isset($_COOKIE['userRole'])) $userRole = $_COOKIE['userRole'];
    $menus = [
        [
            'role' => ['admin', 'staff'],
            'menu' => 'Product'
        ],[
            'role' => ['admin'],
            'menu' => 'Transaksi'
        ],[
            'role' => ['admin'],
            'menu' => 'Laporan'
        ]
    ];

    foreach($menus as $menu) {
        if (in_array($userRole, $menu['role'])){
            if (strtolower($path) == "/" . strtolower($menu["menu"])){
                echo "<a class='active' href='/" . $menu["menu"] . "'>" . $menu["menu"] . "</a>";
            } else {
                echo "<a href='/" . $menu["menu"] . "'>" . $menu["menu"] . "</a>";
            }
        }
    }
  ?>
</div>