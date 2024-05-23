<div class="container col-10 mt-5">
    <div class="row justify-content-start gap-5">
        <?php if (!empty($jobOffers)) : ?>
            <?php foreach ($jobOffers as $job) : ?>
                <div class="card" style="width: 25rem;">
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?php echo $job['id']; ?>">
                        <input type="hidden" name="action" value="delete">
                        <button type="submit" class="btn-delete-offers d-flex justify-content-center align-items-center">
                            <div class="icon-xmark-close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                </svg>
                            </div>
                        </button>
                    </form>
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