<?php

ini_set('display_errors', 1);

if (empty($_GET['action'])) {
    include 'controllers/HomepageController.php';
} elseif ($_GET['action'] === "profil") {
    include 'controllers/ProfilController.php';
}
