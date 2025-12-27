  <div id="view-edit" class="page-section">
            <div style="max-width: 700px; margin: 0 auto;">
                <div class="glass-card">
                    <div class="form-header">
                        <h3 class="fw-bold m-0">Modifier le Client</h3>
                    </div>
                    <form action="home.php" method="post" enctype="multipart/form-data" class="p-4">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($client['id']); ?>">
                        <input type="hidden" name="old_image" value="<?php echo htmlspecialchars($client['image']); ?>">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="small fw-bold">Nom</label>
                                <input type="text" name="nom" class="form-control modern-input"
                                    value="<?php echo htmlspecialchars($client['nom']); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="small fw-bold">Prénom</label>
                                <input type="text" name="prenom" class="form-control modern-input"
                                    value="<?php echo htmlspecialchars($client['prenom']); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="small fw-bold">Ville</label>
                                <select name="ville" class="form-select modern-input">
                                    <?php
                                    $villes = ["Casablanca", "Rabat", "Berkane", "Fes", "Ouajda"];
                                    foreach ($villes as $v) {
                                        $selected = ($client['ville'] == $v) ? "selected" : "";
                                        echo "<option value='$v' $selected>$v</option>";
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="small fw-bold">Sexe</label>
                                <div class="gender-box">
                                    <label class="gender-option">
                                        <input type="radio" name="sexe" value="Homme" <?php echo ($client['sexe'] == 'Homme') ? 'checked' : ''; ?>>
                                        <span class="gender-card">Homme</span>
                                    </label>
                                    <label class="gender-option">
                                        <input type="radio" name="sexe" value="Femme" <?php echo ($client['sexe'] == 'Femme') ? 'checked' : ''; ?>>
                                        <span class="gender-card">Femme</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="small fw-bold">Loisirs</label>
                                <div class="hobby-grid">
                                    <?php $hobbies_array = explode(", ", $client['loisirs']); ?>
                                    <label class="hobby-item">
                                        <input type="checkbox" name="karate" <?php echo in_array("Karate", $hobbies_array) ? 'checked' : ''; ?>>
                                        <span class="hobby-box">Karate</span>
                                    </label>
                                    <label class="hobby-item">
                                        <input type="checkbox" name="football" <?php echo in_array("Football", $hobbies_array) ? 'checked' : ''; ?>>
                                        <span class="hobby-box">Football</span>
                                    </label>
                                    <label class="hobby-item">
                                        <input type="checkbox" name="tennis" <?php echo in_array("Tennis", $hobbies_array) ? 'checked' : ''; ?>>
                                        <span class="hobby-box">Tennis</span>
                                    </label>
                                    <label class="hobby-item">
                                        <input type="checkbox" name="reading" <?php echo in_array("Reading", $hobbies_array) ? 'checked' : ''; ?>>
                                        <span class="hobby-box">Lecture</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="small fw-bold">Photo</label>
                                <div class="d-flex align-items-center gap-3 mb-2">
                                    <?php if ($client['image']): ?>
                                        <img src='<?php echo htmlspecialchars($client['image']); ?>'
                                            style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; border: 2px solid #406ff3;">
                                    <?php endif; ?>
                                    <input type="file" name="image" class="form-control modern-input">
                                </div>
                                <small class="text-muted">Laissez vide pour conserver l'image actuelle.</small>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="d-flex gap-2">
                                    <button type="submit" name="save_client" class="btn-submit-modern">METTRE À
                                        JOUR</button>
                                    <button type="button" onclick="window.location='home.php'"
                                        class="btn btn-outline-secondary rounded-3 px-4">ANNULER</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>