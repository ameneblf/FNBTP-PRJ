<div class="modal fade " id="modaladd" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 40rem !important; display: block;"
        role="document">
        <form action="" method="post" id="formentre">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Ajouter une entreprise</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">registre de commerce</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-rename" class="input-group-text"><i
                                        class="bx bx-rename"></i></span>
                                <input type="text" required id="registre" name="registre" class="form-control"
                                    placeholder="Registre de commerce" aria-label="Adresse"
                                    aria-describedby="basic-icon-default-Adresse">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Nom ou raison sociale</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-rename" class="input-group-text"><i
                                        class="bx bx-rename"></i></span>
                                <input type="text" required id="nom" name="nom" class="form-control"
                                    placeholder="Nom ou raison sociale" aria-label="Adresse"
                                    aria-describedby="basic-icon-default-Adresse">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-map-alt">Categorie</label>
                        <div class="input-group input-group-phone">
                            <span id="basic-icon-map-alt" class="input-group-text"><i
                                    class="bx bx-intersect"></i></span>
                            <select id="secteur" required name="secteur" class="form-select">
                                <option value="0">Sélection par défaut</option>
                                <?php
                                $sql1 = "SELECT * FROM `categ`";
                                $region = mysqli_query($conn, $sql1);
                                if (mysqli_num_rows($region) > 0) {
                                    while ($row = mysqli_fetch_assoc($region)) {
                                        echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-map">Ville</label>
                        <div class="input-group input-group-phone">
                            <span id="basic-icon-map" class="input-group-text"><i class="bx bx-map"></i></span>
                            <select id="ville" required name="ville" class="form-select">
                                <option value="0">Sélection par défaut</option>
                                <?php
                                $sql1 = "SELECT * FROM `ville` where region=4";
                                $region = mysqli_query($conn, $sql1);
                                if (mysqli_num_rows($region) > 0) {
                                    while ($row = mysqli_fetch_assoc($region)) {
                                        echo "<option value=" . $row["nom"] . ">" . $row["nom"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">Adresse</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-location-plus" class="input-group-text"><i
                                    class="bx bx-location-plus"></i></span>
                            <textarea type="text" id="adresse" name="Adresse" class="form-control" placeholder="Adresse"
                                aria-label="Adresse" aria-describedby="basic-icon-default-Adresse"></textarea>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">MONTANT DE COTISATION</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-money" class="input-group-text"><i
                                    class="bx bx-money"></i></span>
                            <input type="number" id="MONTANT_COTISATION" name="MONTANT_COTISATION" class="form-control"
                                placeholder="100000" aria-label="montant" aria-describedby="basic-icon-default-Money">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Telephone</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-mobile" class="input-group-text"><i
                                        class="bx bx-mobile"></i></span>
                                <input type="text" pattern="(06|07|05|08)[0-9]{8}" name="tel" id="tel"
                                    class="form-control" placeholder="0XXX-XXX-XXX" aria-label="Telephone"
                                    aria-describedby="basic-icon-default-Telephone">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Fax</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-default-phone" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" pattern="(06|07|05|08)[0-9]{8}" name="fax" id="fax"
                                    class="form-control" placeholder="0XXX-XXX-XXX" aria-label="Telephone"
                                    aria-describedby="basic-icon-default-Telephone">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-mail">E-mails</label>
                        <div class="input-group input-group-mail">
                            <span id="basic-icon-default-at" class="input-group-text"><i class="bx bx-at"></i></span>
                            <input type="mail" id="mail" name="mail" class="form-control"
                                placeholder="john@example.com;mark@example.com;" aria-label="mail"
                                aria-describedby="basic-icon-default-mail">
                        </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <div class="col-xl-12">
                            <div class="nav-align-top mb-4">
                                <div class="tab-content">
                                    <div class="col mb-0">
                                        <label class="form-label" for="basic-icon-default-mail">Responsable</label>
                                        <div class="input-group input-group-mail">
                                            <span id="basic-icon-default-at" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="text" id="respo" name="responsable" class="form-control"
                                                placeholder="john tils" aria-label="mail"
                                                aria-describedby="basic-icon-default-responsable">
                                        </div>
                                    </div>


                                    <div class="col mb-0">
                                        <label class="form-label" for="basic-icon-default-phone">GSM</label>
                                        <div class="input-group input-group-phone">
                                            <span id="basic-icon-mobile" class="input-group-text"><i
                                                    class="bx bx-mobile"></i></span>
                                            <input type="text" pattern="(06|07|05|08)[0-9]{8}" name="gsm" id="gsm"
                                                class="form-control" placeholder="0XXX-XXX-XXX" aria-label="Telephone"
                                                aria-describedby="basic-icon-default-Telephone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" name="addsociete" id="addsociete" class="btn btn-primary">ajouter</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="bs-toast toast toast-placement-ex m-2 fade bg-danger bottom-0 end-0 hide" role="alert" aria-live="assertive"
    aria-atomic="true" data-delay="2000">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Erreur</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">Veuillez remplir les champs !</div>
</div>

<div class="bs-toast toast toast-placement-ex succes m-2 fade bg-success bottom-0 end-0 hide" role="alert"
    aria-live="assertive" aria-atomic="true" data-delay="150">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">succès</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">Opération réussie</div>
</div>
<div class="modal fade " id="modalupdate" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 40rem !important; display: block;"
        role="document">
        <form action="" method="post" id="formentre">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">modifier </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="mb-3" style="display: none;">
                        <label class="form-label" for="basic-icon-default-company">id</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-rename" class="input-group-text"><i class="bx bx-rename"></i></span>
                            <input type="text" required id="id_up" name="id_up" class="form-control"
                                aria-label="Adresse" aria-describedby="basic-icon-default-Adresse">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">registre de commerce</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-rename" class="input-group-text"><i
                                        class="bx bx-rename"></i></span>
                                <input type="text" required id="registreup" name="registreup" class="form-control"
                                    placeholder="Registre de commerce" aria-label="Adresse"
                                    aria-describedby="basic-icon-default-Adresse">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-company">Nom ou raison sociale</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-rename" class="input-group-text"><i
                                        class="bx bx-rename"></i></span>
                                <input type="text" required id="nomup" name="nomup" class="form-control"
                                    placeholder="Nom ou raison sociale" aria-label="Adresse"
                                    aria-describedby="basic-icon-default-Adresse">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-map-alt">Categorie</label>
                        <div class="input-group input-group-phone">
                            <span id="basic-icon-map-alt" class="input-group-text"><i
                                    class="bx bx-intersect"></i></span>
                            <select id="secteurup" required name="secteurup" class="form-select">
                                <option value="0">Sélection par défaut</option>
                                <?php
                                $sql1 = "SELECT * FROM `categ`";
                                $region = mysqli_query($conn, $sql1);
                                if (mysqli_num_rows($region) > 0) {
                                    while ($row = mysqli_fetch_assoc($region)) {
                                        echo "<option value=" . $row["code"] . ">" . $row["nom"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-map">Ville</label>
                        <div class="input-group input-group-phone">
                            <span id="basic-icon-map" class="input-group-text"><i class="bx bx-map"></i></span>
                            <select id="villeup" required name="ville" class="form-select">
                                <option value="0">Sélection par défaut</option>
                                <?php
                                $sql1 = "SELECT * FROM `ville` where region=4";
                                $region = mysqli_query($conn, $sql1);
                                if (mysqli_num_rows($region) > 0) {
                                    while ($row = mysqli_fetch_assoc($region)) {
                                        echo "<option value=" . $row["nom"] . ">" . $row["nom"] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">Adresse</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-location-plus" class="input-group-text"><i
                                    class="bx bx-location-plus"></i></span>
                            <textarea type="text" required id="adresse_up" name="adresse_up" class="form-control"
                                placeholder="Adresse" aria-label="Adresse"
                                aria-describedby="basic-icon-default-Adresse"></textarea>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">MONTANT DE COTISATION</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-location-plus" class="input-group-text"><i
                                    class="bx bx-money"></i></span>
                            <input type="number" required id="MONTANT_COTISATION_up" name="MONTANT_COTISATION_up"
                                class="form-control" placeholder="100000" aria-label="Adresse"
                                aria-describedby="basic-icon-default-Adresse">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Telephone</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-mobile" class="input-group-text"><i
                                        class="bx bx-mobile"></i></span>
                                <input type="text" pattern="(06|07|05|08)[0-9]{8}" name="tel_up" required id="tel_up"
                                    class="form-control" placeholder="0XXX-XXX-XXX" aria-label="Telephone"
                                    aria-describedby="basic-icon-default-Telephone">
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label" for="basic-icon-default-phone">Fax</label>
                            <div class="input-group input-group-phone">
                                <span id="basic-icon-default-phone" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" required pattern="(06|07|05|08)[0-9]{8}" name="fax_up" id="fax_up"
                                    class="form-control" placeholder="0XXX-XXX-XXX" aria-label="Telephone"
                                    aria-describedby="basic-icon-default-Telephone">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-mail">E-mails</label>
                        <div class="input-group input-group-mail">
                            <span id="basic-icon-default-at" class="input-group-text"><i class="bx bx-at"></i></span>
                            <input type="mail" required id="mail_up" name="mail_up" class="form-control"
                                placeholder="john@example.com;mark@example.com;" aria-label="mail"
                                aria-describedby="basic-icon-default-mail">
                        </div>
                    </div>
                    <br>
                    <div class="mb-3">
                        <div class="col-xl-12">
                            <div class="nav-align-top mb-4">
                                <div class="tab-content">
                                    <div class="col mb-0">
                                        <label class="form-label" for="basic-icon-default-mail">Responsable</label>
                                        <div class="input-group input-group-mail">
                                            <span id="basic-icon-default-at" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="text" required id="respo_up" name="respo_up"
                                                class="form-control" placeholder="john tils" aria-label="mail"
                                                aria-describedby="basic-icon-default-responsable">
                                        </div>
                                    </div>


                                    <div class="col mb-0">
                                        <label class="form-label" for="basic-icon-default-phone">GSM</label>
                                        <div class="input-group input-group-phone">
                                            <span id="basic-icon-mobile" class="input-group-text"><i
                                                    class="bx bx-mobile"></i></span>
                                            <input type="text" pattern="(06|07|05|08)[0-9]{8}" name="gsm_up" id="gsm_up"
                                                class="form-control" placeholder="0XXX-XXX-XXX" aria-label="Telephone"
                                                aria-describedby="basic-icon-default-Telephone">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" name="upsociete" id="upsociete" class="btn btn-primary">update</button>
                </div>
            </div>
        </form>
    </div>
</div>