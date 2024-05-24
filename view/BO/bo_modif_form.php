<div class="container col-10 mt-5">
    <h2>Modifier une offre d'emploi</h2>

    <!-- formulaire de modification d'offres -->
    <form id="editJobOfferForm" method="post" action="index.php?page=admin">
        <input type="hidden" name="action" value="edit">
        <div class="d-flex align-items-center gap-3">
            <label for="selectJobOffer">Sélectionner une offre d'emploi à modifier:</label>
            <select id="selectJobOffer" class="form-select w-25" name="id">
                <option value="">--Sélectionner une offre d'emploi--</option>
                <?php foreach ($jobOffers as $job) : ?>
                    <option value="<?php echo htmlspecialchars($job['id']); ?>">
                        <?php echo htmlspecialchars($job['title']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="row justify-content-center">
            <div class="col-8" id="jobOfferFields" style="display:none;">
                <div class="mt-5">
                    <label class="form-label" for="title">Intitulé de l'offre</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="col d-flex justify-content-between mt-5">
                    <div class="champ-form-size">
                        <label class="form-label" for="start_date">Date prise de poste</label>
                        <input class="form-control" type="date" id="start_date" name="start_date">
                    </div>
                    <div class="champ-form-size">
                        <label class="form-label" for="location">Lieu du poste</label>
                        <input class="form-control" type="text" id="location" name="location">
                    </div>
                    <div class="champ-form-size">
                        <label class="form-label" for="salary">Montant du salaire proposé</label>
                        <input class="form-control" type="text" id="salary" name="salary">
                    </div>
                </div>
                <div class="col d-flex justify-content-between mt-5">
                    <div class="champ-form-size">
                        <label class="form-label" for="type">Type du poste</label>
                        <input class="form-control" type="text" id="type" name="type">
                    </div>
                    <div class="champ-form-size">
                        <label class="form-label" for="appearance">Situation de présence</label>
                        <input class="form-control" type="text" id="appearance" name="appearance">
                    </div>
                    <div class="champ-form-size">
                        <label class="form-label" for="link">Lien de l'offre</label>
                        <input class="form-control" type="text" id="link" name="link">
                    </div>
                </div>

                <div class="mt-5">
                    <label class="form-label" for="short_description">Description courte</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="4"></textarea>
                </div>
                <div class="mt-5">
                    <label for="long_description">Description longue</label>
                    <textarea class="form-control" id="long_description" name="long_description" rows="8"></textarea>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Modifier</button>
            </div>
        </div>

    </form>
</div>