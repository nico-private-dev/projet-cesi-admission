
<!-- Card offre vue Utilisateur -->
<div class="container col-10 mt-5">
    <div class="row justify-content-start gap-5">
        <?php if (!empty($jobOffers)) : ?>
            <?php foreach ($jobOffers as $job) : ?>
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($job['title']); ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary my-3"><?php echo htmlspecialchars($job['start_date']); ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo htmlspecialchars($job['location']); ?></h6>
                        <div class="d-flex gap-3 my-3">
                            <div class="container-info-more"><span><?php echo htmlspecialchars($job['salary']); ?>€</span></div>
                            <div class="container-info-more"><span><?php echo htmlspecialchars($job['type']); ?></span></div>
                            <div class="container-info-more"><span><?php echo htmlspecialchars($job['appearance']); ?></span></div>
                        </div>
                        <p class="card-text mb-4"><?php echo htmlspecialchars($job['short_description']); ?></p>
                        <div class="d-flex justify-content-end">
                            <a href="<?php echo htmlspecialchars($job['link']); ?>" class="btn-voir-offre bg-primary">Voir l'offre</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Aucune offre d'emploi disponible pour le moment.</p>
        <?php endif; ?>
    </div>
</div>