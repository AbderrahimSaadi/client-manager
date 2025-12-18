                <div id="view-edit" class="page-section">
                        <div class="d-flex justify-content-center align-items-center bg-transparent-custom"
                                style="min-height: 80vh;">
                                <div class="custom-card p-4" style="width: 80%; max-width: 800px;">
                                        <h3 class="fw-bold mb-4 text-center">Modifier Client</h3>
                                        <form action="home.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id"
                                                        value="<?php echo htmlspecialchars($client['id']); ?>">
                                                <input type="hidden" name="old_image"
                                                        value="<?php echo htmlspecialchars($client['image']); ?>">

                                                <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                                <label class="form-label">Nom</label>
                                                                <input type="text" name="nom" class="form-control"
                                                                        value="<?php echo htmlspecialchars($client['nom']); ?>"
                                                                        required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                                <label class="form-label">Prénom</label>
                                                                <input type="text" name="prenom" class="form-control"
                                                                        value="<?php echo htmlspecialchars($client['prenom']); ?>"
                                                                        required>
                                                        </div>
                                                </div>

                                                <div class="mb-3">
                                                        <label class="d-block mb-2">Sexe</label>
                                                        <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="sexe"
                                                                        value="Homme" <?php echo ($client['sexe'] == 'Homme') ? 'checked' : ''; ?>>
                                                                <label class="form-check-label">Homme</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="sexe"
                                                                        value="Femme" <?php echo ($client['sexe'] == 'Femme') ? 'checked' : ''; ?>>
                                                                <label class="form-check-label">Femme</label>
                                                        </div>
                                                </div>

                                                <div class="mb-3">
                                                        <label class="form-label">Ville</label>
                                                        <select name="ville" class="form-select">
                                                                <?php
                                                                $villes = ["Casablanca", "Rabat", "Berkane", "Fes", "Ouajda"];
                                                                foreach ($villes as $v) {
                                                                        $selected = ($client['ville'] == $v) ? "selected" : "";
                                                                        echo "<option value='$v' $selected>$v</option>";
                                                                }
                                                                ?>
                                                        </select>
                                                </div>

                                                <div class="mb-3">
                                                        <label class="form-label">Loisirs</label>
                                                        <div class="d-flex gap-3 flex-wrap">
                                                                <?php
                                                                // Convert the comma-separated string from DB back into an array for checking
                                                                $hobbies_array = explode(", ", $client['loisirs']);
                                                                ?>
                                                                <div><input type="checkbox" name="karate" <?php echo in_array("Karate", $hobbies_array) ? 'checked' : ''; ?>> Karate</div>
                                                                <div><input type="checkbox" name="football" <?php echo in_array("Football", $hobbies_array) ? 'checked' : ''; ?>> Football</div>
                                                                <div><input type="checkbox" name="tennis" <?php echo in_array("Tennis", $hobbies_array) ? 'checked' : ''; ?>> Tennis</div>
                                                                <div><input type="checkbox" name="reading" <?php echo in_array("Reading", $hobbies_array) ? 'checked' : ''; ?>> Reading</div>
                                                        </div>
                                                </div>

                                                <div class="mb-4">
                                                        <label class="form-label">Photo actuelle</label>
                                                        <div class="d-flex align-items-center gap-3">
                                                                <?php if ($client['image']): ?>
                                                                        <img src='<?php echo htmlspecialchars($client['image']); ?>'
                                                                                width='60' height='60'
                                                                                class='rounded-circle object-fit-cover shadow-sm'
                                                                                border="1">
                                                                <?php endif; ?>
                                                                <div class="flex-grow-1">
                                                                        <input type="file" name="image"
                                                                                class="form-control">
                                                                        <small class="text-muted">Laissez vide pour
                                                                                conserver l'image actuelle.</small>
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="d-flex gap-2">
                                                        <button type="submit" name="save_client"
                                                                class="btn btn-success flex-grow-1 py-2">Mettre à
                                                                jour</button>
                                                        <button type="button" onclick="window.location='home.php'"
                                                                class="btn btn-outline-secondary px-4 py-2">Annuler</button>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>