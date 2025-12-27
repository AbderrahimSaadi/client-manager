    <div id="view-add" class="page-section">
            <div style="max-width: 700px; margin: 0 auto;">
                <div class="glass-card">
                    <div class="form-header">
                        <h3 class="fw-bold m-0">Ajouter un Client</h3>
                    </div>
                    <form action="home.php" method="post" enctype="multipart/form-data" class="p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="small fw-bold">Nom</label>
                                <input type="text" name="nom" class="form-control modern-input" required>
                            </div>
                            <div class="col-md-6">
                                <label class="small fw-bold">Prénom</label>
                                <input type="text" name="prenom" class="form-control modern-input" required>
                            </div>
                            <div class="col-md-6">
                                <label class="small fw-bold">Ville</label>
                                <select name="ville" class="form-select modern-input">
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Berkane">Berkane</option>
                                    <option value="Fes">Fes</option>
                                    <option value="Ouajda">Ouajda</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="small fw-bold">Sexe</label>
                                <div class="gender-box">
                                    <label class="gender-option">
                                        <input type="radio" name="sexe" value="Homme" checked>
                                        <span class="gender-card">Homme</span>
                                    </label>
                                    <label class="gender-option">
                                        <input type="radio" name="sexe" value="Femme">
                                        <span class="gender-card">Femme</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="small fw-bold">Loisirs</label>
                                <div class="hobby-grid">
                                    <label class="hobby-item"><input type="checkbox" name="karate"><span
                                            class="hobby-box">Karate</span></label>
                                    <label class="hobby-item"><input type="checkbox" name="football"><span
                                            class="hobby-box">Football</span></label>
                                    <label class="hobby-item"><input type="checkbox" name="tennis"><span
                                            class="hobby-box">Tennis</span></label>
                                    <label class="hobby-item"><input type="checkbox" name="reading"><span
                                            class="hobby-box">Lecture</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="small fw-bold">Photo</label>
                                <input type="file" name="image" class="form-control modern-input" required>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" name="save_client" class="btn-submit-modern">ENREGISTRER</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>