 <div id="view-add" class="page-section">
                        <div class="d-flex justify-content-center align-items-center bg-transparent-custom"
                                style="min-height: 80vh;">
                                <div class="custom-card p-4" style="width: 80%; max-width: 800px;">
                                        <h3 class="fw-bold mb-4 text-center">Ajouter Client</h3>
                                        <form action="home.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                        <div class="col-md-6 mb-3"><label
                                                                        class="form-label">Nom</label><input type="text"
                                                                        name="nom" class="form-control" required />
                                                        </div>
                                                        <div class="col-md-6 mb-3"><label
                                                                        class="form-label">Prenom</label><input
                                                                        type="text" name="prenom" class="form-control"
                                                                        required /></div>
                                                </div>
                                                <div class="mb-3">
                                                        <label class="d-block mb-2">Sexe</label>
                                                        <div class="form-check form-check-inline"><input
                                                                        class="form-check-input" type="radio"
                                                                        name="sexe" value="Homme" checked /><label
                                                                        class="form-check-label">Homme</label></div>
                                                        <div class="form-check form-check-inline"><input
                                                                        class="form-check-input" type="radio"
                                                                        name="sexe" value="Femme" /><label
                                                                        class="form-check-label">Femme</label></div>
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Ville</label>
                                                        <select name="ville" class="form-select">
                                                                <option value="Casablanca">Casablanca</option>
                                                                <option value="Rabat">Rabat</option>
                                                                <option value="Berkane">Berkane</option>
                                                                <option value="Fes">Fes</option>
                                                                <option value="Ouajda">Ouajda</option>
                                                        </select>
                                                </div>
                                                <div class="mb-3">
                                                        <label class="form-label">Loisirs</label>
                                                        <div class="d-flex gap-3 flex-wrap">
                                                                <div><input type="checkbox" name="karate" /> Karate
                                                                </div>
                                                                <div><input type="checkbox" name="football" /> Football
                                                                </div>
                                                                <div><input type="checkbox" name="tennis" /> Tennis
                                                                </div>
                                                                <div><input type="checkbox" name="reading" /> Reading
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="mb-4"><label class="form-label">Photo</label><input
                                                                type="file" name="image" class="form-control"
                                                                required /></div>
                                                <button type="submit" name="save_client"
                                                        class="btn btn-primary w-100 py-2">Enregistrer</button>
                                        </form>
                                </div>
                        </div>
                </div>