<?php

class UserManagement {

    public $db;

    public function __construct() {
        $this->db = db();
    }

    function role(): void {
        $cRoles = new DBRoles();
        $listRoles = $cRoles->getRoles();

        if (isset($_POST["badd"])){
            $roleName = $_POST["fname"];
            $roleDesc = $_POST["fdesc"];
            $cRoles->addRole($roleName, $roleDesc);
        }

        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/Roles.php");
    }

    function loginPage(): void {
        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/Login.php");
    }

    function login(): void {
        $username = $_POST["tUsername"];
        $password = $_POST["tPassword"];
        $sql = "SELECT Pengguna.IdPengguna,Pengguna.NamaPengguna,Pengguna.Password,HakAkses.NamaAkses FROM Pengguna JOIN HakAkses ON Pengguna.idAkses=HakAkses.IdAkses WHERE Pengguna.NamaPengguna='". $username . "' AND Pengguna.Password='" . $password . "';";
    
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            setcookie("userID", $row["IdPengguna"], time() + (86400 * 30), "/");
            setcookie("userRole", $row["NamaAkses"], time() + (86400 * 30), "/");
            setcookie("userLogin", true, time() + (86400 * 30), "/");
            header("location: /product");
        }else {
            echo "Username or password incorrect";
        }
    }

}

?>