  <div id="view-settings-page" class="page-section">
            <div class="container-fluid py-4">
                <div class="row g-4 mb-5">
                    <?php
                    $total_res = mysqli_query($connect, "SELECT COUNT(*) as total FROM client");
                    $total_clients = mysqli_fetch_assoc($total_res)['total'];
                    $men_res = mysqli_query($connect, "SELECT COUNT(*) as total FROM client WHERE sexe='Homme'");
                    $total_men = mysqli_fetch_assoc($men_res)['total'];
                    $women_res = mysqli_query($connect, "SELECT COUNT(*) as total FROM client WHERE sexe='Femme'");
                    $total_women = mysqli_fetch_assoc($women_res)['total'];
                    ?>
                    <div class="col-md-4">
                        <div class="custom-card p-4 border-start border-primary border-4">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-primary bg-opacity-10 me-3"><i data-feather="users"
                                        class="text-primary"></i></div>
                                <div>
                                    <h6 class="text-muted mb-1 small uppercase fw-bold">Total Clients</h6>
                                    <h3 class="fw-bold mb-0"><?php echo $total_clients; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="custom-card p-4 border-start border-info border-4">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-info bg-opacity-10 me-3"><i data-feather="user"
                                        class="text-info"></i></div>
                                <div>
                                    <h6 class="text-muted mb-1 small uppercase fw-bold">Hommes</h6>
                                    <h3 class="fw-bold mb-0"><?php echo $total_men; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="custom-card p-4 border-start border-danger border-4">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon bg-danger bg-opacity-10 me-3"><i data-feather="user"
                                        class="text-danger"></i></div>
                                <div>
                                    <h6 class="text-muted mb-1 small uppercase fw-bold">Femmes</h6>
                                    <h3 class="fw-bold mb-0"><?php echo $total_women; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="custom-card overflow-hidden">
                            <div style="height: 120px; background: linear-gradient(135deg, #406ff3 0%, #1e40af 100%);">
                            </div>
                            <div class="px-4 pb-4" style="margin-top: -60px;">
                                <div class="text-center mb-4">
                                    <img src="assets/image_1.png"
                                        onerror="this.src='https://via.placeholder.com/120?text=Admin'"
                                        style="width:120px; height:120px; border-radius:50%; object-fit:cover; border: 5px solid var(--bg-card); box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                                    <h3 class="fw-bold mt-3 mb-1">Abderrahime</h3>
                                    <span
                                        class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">Administrator</span>
                                </div>
                                <div class="p-3 bg-light rounded-3 mb-3 border border-light">
                                    <label class="fw-bold text-dark">Email</label>
                                    <span class="small text-muted d-block">abderahime2002@gmail.com</span>
                                </div>
                                <div class="p-3 bg-light rounded-3 mb-4 border border-light">
                                    <label class="fw-bold text-dark">Password</label>
                                    <span class="small text-muted d-block">1234</span>
                                </div>
                                <button class="btn btn-primary w-100 py-3 fw-bold rounded-3">
                                    <i data-feather="settings"></i> Manage System Settings
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>