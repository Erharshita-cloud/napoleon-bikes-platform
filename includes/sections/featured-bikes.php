<?php
/**
 * ---------------------------------------------------------
 * Napoleon Bikes Platform
 * Featured Bikes Section
 * ---------------------------------------------------------
 */

require_once __DIR__ . '/../database.php';

try {

    $stmt = $pdo->query("
        SELECT *
        FROM bikes
        ORDER BY id ASC
        LIMIT 4
    ");

    $bikes = $stmt->fetchAll();

} catch (PDOException $e) {

    $bikes = [];

}
?>

<section class="featured-bikes" id="featured-bikes">

    <div class="container">

        <div class="section-header">

            <span>
                Premium Collection
            </span>

            <h2>
                Featured Motorcycles
            </h2>

            <p>
                Discover our latest lineup of motorcycles engineered for
                performance, comfort and unforgettable riding experiences.
            </p>

        </div>

        <div class="bikes-grid">

<?php if (!empty($bikes)): ?>

    <?php foreach ($bikes as $bike): ?>

        <article class="bike-card">

            <div class="bike-image">

                <img
                    src="<?= IMG ?>bikes/<?= e($bike['image']); ?>"
                    alt="<?= e($bike['name']); ?>">

                <span class="bike-badge">
                    New Arrival
                </span>

            </div>

            <div class="bike-content">

                <h3>
                    <?= e($bike['name']); ?>
                </h3>

                <p class="bike-description">
                    <?= e($bike['description']); ?>
                </p>

                <div class="bike-price">

                    <?= price((float)$bike['price']); ?>

                </div>

                <div class="bike-features">

                    <span>
                        <i class="ri-settings-5-line"></i>
                        349 CC
                    </span>

                    <span>
                        <i class="ri-speed-up-line"></i>
                        180 km/h
                    </span>

                    <span>
                        <i class="ri-gas-station-line"></i>
                        40 km/l
                    </span>

                </div>

                <div class="bike-actions">

                    <a
                        href="<?= url('booking/'); ?>"
                        class="btn btn-primary">

                        Book Test Ride

                    </a>

                    <a
                        href="<?= url('bikes/'); ?>"
                        class="btn btn-outline">

                        View Details

                    </a>

                </div>

            </div>

        </article>

    <?php endforeach; ?>

<?php else: ?>

    <div class="no-bikes">

        <i class="ri-motorbike-fill"></i>

        <h3>
            No Bikes Available
        </h3>

        <p>
            New motorcycles will be added soon.
        </p>

    </div>

<?php endif; ?>
                </div>

        <div class="section-footer">

            <a
                href="<?= url('bikes/'); ?>"
                class="btn btn-primary">

                <i class="ri-motorbike-fill"></i>

                View All Bikes

            </a>

        </div>

    </div>

</section>
