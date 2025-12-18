<?php
// 1. Start Output Buffering and Session
ob_start();
session_start();

// ---- LOGOUT LOGIC ---- //
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: login.php");
    exit();
}

// ---- CONNEXION ---- //
try {
    $connect = mysqli_connect("localhost", "root", "", "gestion_clients");
} catch (Exception $e) {
    die("Database Connection Error: " . $e->getMessage());
}

// ---- DELETE ACTION ---- //
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($connect, "DELETE FROM client WHERE id=$id");
    header("Location: home.php");
    exit();
}

// ---- EDIT PREPARATION ---- //
$editMode = false;
$client = ['id' => '', 'nom' => '', 'prenom' => '', 'sexe' => 'Homme', 'ville' => 'Casablanca', 'loisirs' => '', 'image' => ''];

if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $res = mysqli_query($connect, "SELECT * FROM client WHERE id=$id");
    if ($row = mysqli_fetch_assoc($res)) {
        $client = $row;
        $editMode = true;
    }
    echo "<script>history.replaceState({}, '', 'home.php');</script>";
}

// ---- INSERT OR UPDATE ---- //
if (isset($_POST['save_client'])) {
    $id = $_POST['id'] ?? '';
    $nom = mysqli_real_escape_string($connect, $_POST['nom']);
    $prenom = mysqli_real_escape_string($connect, $_POST['prenom']);
    $sexe = mysqli_real_escape_string($connect, $_POST['sexe']);
    $ville = mysqli_real_escape_string($connect, $_POST['ville']);

    $hobbies = [];
    if (isset($_POST['karate']))
        $hobbies[] = "Karate";
    if (isset($_POST['football']))
        $hobbies[] = "Football";
    if (isset($_POST['tennis']))
        $hobbies[] = "Tennis";
    if (isset($_POST['reading']))
        $hobbies[] = "Reading";
    $loisirs = mysqli_real_escape_string($connect, implode(", ", $hobbies));

    $imagePath = $_POST['old_image'] ?? '';
    if (!empty($_FILES['image']['name'])) {
        if (!is_dir('uploads'))
            mkdir('uploads');
        $imagePath = "uploads/" . time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }
    $imagePath = mysqli_real_escape_string($connect, $imagePath);

    if (!empty($id)) {
        $query = "UPDATE client SET nom='$nom', prenom='$prenom', sexe='$sexe', ville='$ville', loisirs='$loisirs', image='$imagePath' WHERE id=$id";
        $msg = "Updated Successfully!";
    } else {
        $query = "INSERT INTO client (nom, prenom, sexe, ville, loisirs, image) VALUES ('$nom','$prenom','$sexe','$ville','$loisirs','$imagePath')";
        $msg = "Added Successfully!";
    }

    if (mysqli_query($connect, $query)) {
        echo "<script>alert('$msg'); window.location='home.php';</script>";
        exit();
    }
}
?>