<div class="modal fade " id="modalup" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;" role="document">
        <form action="table_com.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Etude de la demande</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="alert alert-danger" style="display:none;" id="alert" role="alert"></div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-user">N° Certificat</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-dots-vertical-rounded" class="input-group-text"><i class="bx bx-dots-vertical-rounded"></i></span>
                            <input type="text" required id="N_Certificat" name="N_Certificat" class="form-control" placeholder="N° Certificat" aria-label="N_Certificat">
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-user">Date</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-dots-vertical-rounded" class="input-group-text"><i class="bx bx-dots-vertical-rounded"></i></span>
                            <input type="date" required id="date" name="date" class="form-control" placeholder="date validation" aria-label="date validation">
                        </div>
                    </div>
                    <br>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Dossier administratif</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked1" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked1">Moyens financiers et chiffre d'affaires</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked2" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked2">Moyens Humains</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked3" name="etude_administrative[]">
                        <label class="form-check-label" for="flexSwitchCheckChecked3">Moyens materiels</label>
                    </div>
                    <div id="motif">
                        <label for="exampleFormControlTextarea1" class="form-label">motif</label>
                        <textarea class="form-control" id="motifval" name="motif" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="text-end mb-3">
                        <button type="button" id="valid" name="valid" class="  btn btn-outline-primary">valide</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade " id="upqualif" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;" role="document">
        <form action="table_com.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="col mb-0">
                        <label class="form-label" for="Entreprise">class</label>
                        <div class="input-group input-group-phone">
                            <span id="basic-icon-table" class="input-group-text"><i class="bx bx-table"></i></span>
                            <select id="class" required name="class" class="form-select">
                                <option value="0">Sélection par défaut</option>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">Note</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-notepad" class="input-group-text"><i class="bx bx-notepad"></i></span>
                            <textarea type="text" required="" id="note" name="note" class="form-control" placeholder="Note" aria-label="Adresse" aria-describedby="basic-icon-default-Adresse"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="text-end mb-3">
                        <button type="button" id="upqualifbtn" name="upqualif" class="btn btn-outline-primary">confirmer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade " id="upqualifdem" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 30rem !important; display: block;" role="document">
        <form action="table_com.php" method="POST">
            <div class="modal-content container-xxl">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="col-md">
                        <small class="text-light fw-semibold d-block">TITRE</small>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="RadioOptions" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">PROVISOIRE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="RadioOptions" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">DÉFINITIVE</label>
                        </div>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label" for="basic-icon-default-company">Note</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-notepad" class="input-group-text"><i class="bx bx-notepad"></i></span>
                            <textarea type="text" required="" id="notetitre" name="note" class="form-control" placeholder="Note" aria-label="Adresse" aria-describedby="basic-icon-default-Adresse"></textarea>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </form>
    </div>
</div>
