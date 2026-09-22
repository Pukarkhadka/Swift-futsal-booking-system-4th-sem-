<?php
session_start();
$pageTitle = 'Swift Kick — Book Your Court, Play Your Passion';
include "db_connect.php";

$courtCount = 0;
$result = $conn ? mysqli_query($conn, "select * from futsals") : false;
$rows = [];
if ($result) {
    while ($futsal = mysqli_fetch_array($result)) {
        $rows[] = $futsal;
    }
    $courtCount = count($rows);
}
?>
<?php include __DIR__ . '/components/header.php'; ?>

<!-- ============ HERO ============ -->
<section class="hero" id="home">
    <div class="container">
        <h1>Swift Kick<span class="accent">Book Your Court, Play Your Passion!</span></h1>
        <p class="hero-text">Say goodbye to coordinating game times over chat. With Swift Kick you can reserve your
            spot on the court in seconds and dive straight into the action — whether you're a seasoned pro or just
            kicking about with friends.</p>
        <div class="hero-actions">
            <a href="#courts" class="btn-sk btn-lime">Browse Courts</a>
            <a href="booking.php" class="btn-sk btn-ghost">Book Now</a>
        </div>
        <div class="hero-stats">
            <div class="hero-stat"><b><?= $courtCount ?></b><span>Courts</span></div>
            <div class="hero-stat"><b>7AM&ndash;8PM</b><span>Slots daily</span></div>
            <div class="hero-stat"><b>2 hrs</b><span>Max per game</span></div>
            <div class="hero-stat"><b>Instant</b><span>Confirmation</span></div>
        </div>
    </div>
</section>

<!-- ============ HOW IT WORKS ============ -->
<section class="section section--tight">
    <div class="container">
        <div class="section-head center" style="flex-direction:column;align-items:center">
            <div>
                <span class="eyebrow">Match day routine</span>
                <h2 class="section-title">Three taps to kick-off</h2>
                <p class="section-lead">Booking a futsal court has never felt this smooth.</p>
            </div>
        </div>
        <div class="steps">
            <div class="step" data-step="1">
                <div class="step-num">01</div>
                <h3>Pick your court</h3>
                <p>Browse our pitches, compare prices and choose the ground that suits your squad.</p>
            </div>
            <div class="step" data-step="2">
                <div class="step-num">02</div>
                <h3>Choose date &amp; time</h3>
                <p>Select a date, a kick-off time and a slot of up to two hours between 7 AM and 8 PM.</p>
            </div>
            <div class="step" data-step="3">
                <div class="step-num">03</div>
                <h3>Play ball!</h3>
                <p>Get instant confirmation, bring your team and enjoy the beautiful game. It's that easy.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ COURTS ============ -->
<section class="section" id="courts">
    <div class="container">
        <div class="section-head">
            <div>
                <span class="eyebrow">The grounds</span>
                <h2 class="section-title">All Courts</h2>
                <p class="section-lead">Professionally maintained futsal courts ready for your next match.</p>
            </div>
            <a href="booking.php" class="btn-sk btn-outline-pitch">Book a slot</a>
        </div>

        <div class="court-grid">
            <?php if (empty($rows)): ?>
                <div class="empty-state">
                    <h3>No courts listed yet</h3>
                    <p>Check back soon — new grounds are added all the time.</p>
                </div>
            <?php endif; ?>
            <?php foreach ($rows as $futsal): ?>
                <article class="court-card">
                    <div class="court-media">
                        <span class="court-tag">Futsal Court</span>
                        <img src="<?= htmlspecialchars($futsal['Photo']) ?>" alt="<?= htmlspecialchars($futsal['Name']) ?>">
                        <div class="court-price">&#8377;<?= htmlspecialchars($futsal['Price']) ?> <small>/ match</small></div>
                    </div>
                    <div class="court-body">
                        <h3><?= htmlspecialchars($futsal['Name']) ?></h3>
                        <p><?= htmlspecialchars($futsal['Description']) ?></p>
                        <a href="booking.php?court_name=<?= urlencode($futsal['Name']) ?>" class="btn-sk btn-pitch">Book now</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section--tight">
    <div class="container">
        <div class="cta-band stripes">
            <div>
                <h2>Ready to get on the pitch?</h2>
                <p>Create a free account and lock in your court before someone else does.</p>
            </div>
            <div class="hero-actions">
                <a href="register.php" class="btn-sk btn-lime">Join Swift Kick</a>
                <a href="booking.php" class="btn-sk btn-ghost">Book a Court</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/footer.php'; ?>
