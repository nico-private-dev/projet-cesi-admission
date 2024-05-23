<button type="button" class="btn btn-primary btn-add-card" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Ajouter une offre d'emploi</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="">
                    <div class="mb-3">
                        <label for="title" class="form-label">Intitulé de l'offre</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="d-flex justify-content-between gap-2">
                        <div class="mb-3 w-50">
                            <label for="start_date" class="form-label">date de prise de poste</label>
                            <input type="date" class="form-control" name="start_date" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 w-50">
                            <label for="location" class="form-label">Lieu du poste</label>
                            <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Montant du salaire proposé</label>
                        <input type="number" class="form-control" name="salary" id="exampleInputEmail1" aria-describedby="emailHelp" min="0">
                    </div>
                    <div class="d-flex justify-content-between gap-2">
                        <div class="mb-3 w-50">
                            <label for="type" class="form-label">Type du poste</label>
                            <select name="type" class="form-select" aria-label="Default select example">
                                <option selected>Ouvrir le menu</option>
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                                <option value="Partiel">Partiel</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                        <div class="mb-3 w-50">
                            <label for="appearance" class="form-label">Situation de présence</label>
                            <select name="appearance" class="form-select" aria-label="Default select example">
                                <option selected>Ouvrir le menu</option>
                                <option value="Présentiel">Présentiel</option>
                                <option value="Partiel">Partiel</option>
                                <option value="Télétravail">Télétravail</option>
                                <option value="Full remote">Full remote</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 w-50">
                        <label for="link" class="form-label">Lien de l'offre</label>
                        <input type="text" class="form-control" name="link" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Courte description</label>
                        <textarea class="form-control" name="short_description" aria-label="With textarea" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="long_description" class="form-label">Description plus détaillée</label>
                        <textarea class="form-control" name="long_description" aria-label="With textarea" rows="8"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ajouter l'offre</button>
                </form>
            </div>
        </div>
    </div>
</div>