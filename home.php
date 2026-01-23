<!--  la base de donnée --> <?php include "db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Management</title>
    <link rel="icon" href="assets/icon_logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style_home.css?v=1.1">
</head>
<body>
    <!--  page de side nav-bar --> <?php include "navbar.php" ?>
    <div class="main-content">
        <div id="view-list" class="page-section active-section">
            <div class="card mb-4 p-3 mt-2">
                <form action="home.php" method="GET" class="d-flex gap-2">
                    <input type="text" name="search" class="form-control" placeholder="Rechercher ..."
                        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                    <button type="submit" class="btn btn-primary px-4"><i data-feather="search"></i></button>
                    <?php if (isset($_GET['search'])): ?><a href="home.php"
                            class="btn btn-outline-secondary px-4">Reset</a><?php endif; ?>
                </form>
            </div>
            <div class="custom-table">
                <table class="table table-hover mb-0 bg-transparent">
                    <thead>
                        <tr>
                            <th style="width: 80px;">Client</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Ville</th>
                            <th>Sexe</th>
                            <th>Loisirs</th>
                            <th class="action-col text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $searchQuery = "";
                        if (isset($_GET['search']) && !empty($_GET['search'])) {
                            $s = mysqli_real_escape_string($connect, $_GET['search']);
                            $searchQuery = "WHERE nom LIKE '%$s%' OR prenom LIKE '%$s%' OR ville LIKE '%$s%'";
                        }
                        $sql = "SELECT * FROM client $searchQuery ORDER BY id DESC";
                        $result = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $img = $row['image'] ?: "https://via.placeholder.com/60";
                            echo "<tr>
                                    <td><img src='$img' style='width: 67px; height: 67px; object-fit: cover; border-radius: 50%; border: 1px blue solid; padding: 2px;'></td>
                                    <td class='fw-bold'>{$row['nom']}</td>
                                    <td>{$row['prenom']}</td>
                                    <td><span class='badge bg-light text-dark border'>{$row['ville']}</span></td>
                                    <td>{$row['sexe']}</td>
                                    <td>{$row['loisirs']}</td>
                                    <td class='action-col text-end'>
                                        <a href='home.php?edit={$row['id']}' class='btn btn-light btn-sm text-primary shadow-sm'><i data-feather='edit-2' width='18'></i></a>
                                        <a href='home.php?delete={$row['id']}' class='btn btn-light btn-sm text-danger shadow-sm' onclick='return confirm(\"Supprimer?\")'><i data-feather='trash-2' width='18'></i></a>
                                    </td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- page for add --> <?php include "page_ajouter.php" ?>
        <!-- page for edit --> <?php include "page_edit.php" ?>
        <!-- page for setting --> <?php include "page_setting.php" ?>
        <!-- page for printer --> <?php include "page_printer.php" ?>
        <!-- page for script --> <?php include "script.php" ?>
</body>

</html>