<?php require_once 'includes/header.php'; ?>

<?php require_once 'includes/sidebar.php'; ?>

    <main id="main">

        <?php require_once 'includes/toolbar.php'; ?>

        <?php
        $lines = [
            1 => [
                'title' => 'Écoutés récemment',
                'number' => 4,
            ],
            2 => [
                  'title' => 'Vos favoris du moment',
                  'number' => 4,
            ],
            3 => [
                'title' => 'Vos playlists',
                'number' => 4,
            ]
        ];
        ?>

        <section class="home-musics">
            <?php foreach ($lines as $line): ?>
                <div class="container-fluid">
                    <h2><?php echo $line['title']; ?></h2>

                    <div class="card-deck">
                        <?php require 'includes/card.php'; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

<?php require_once 'includes/footer.php'; ?>