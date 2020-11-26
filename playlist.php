<?php require_once 'includes/header.php'; ?>

<?php require_once 'includes/sidebar.php'; ?>

<main id="main">

    <br>
    <br>

    <?php require_once 'includes/toolbar.php'; ?>

    <?php

    $musics = [
        'Starboy (Feat. Daft Punk)' => [
        'duration' => '3:51',
        'artists' => ['The Weeknd', 'Daft Punk'],
        ],

        'Party Monster' => [
        'duration' => '4:09',
        'artists' => ['The Weeknd'],
        ],

        'False Alarm' => [
        'duration' => '3:40',
        'artists' => ['The Weeknd'],
        ],

        'Reminder' => [
        'duration' => '3:38',
        'artists' => ['The Weeknd'],
        ],

        'Rockin\'' => [
            'duration' => '3:52',
            'artists' => ['The Weeknd'],
        ],

        'Secrets' => [
            'duration' => '4:25',
            'artists' => ['The Weeknd'],
        ],

        'True Colors' => [
            'duration' => '3:26',
            'artists' => ['The Weeknd'],
        ],

        'Stargirl Interlude (Feat. Lana Del Rey)' => [
            'duration' => '1:51',
            'artists' => ['The Weeknd', 'Lana Del Rey'],
        ],

        'Sidewalks (Feat. Kendrick Lamar)' => [
            'duration' => '3:51',
            'artists' => ['The Weeknd', 'Kendrick Lamar'],
        ],

        'Six Feet Under' => [
            'duration' => '3:57',
            'artists' => ['The Weeknd'],
        ],

        'Love To Lay' => [
            'duration' => '3:43',
            'artists' => ['The Weeknd'],
        ],

        'A Lonely Night' => [
            'duration' => '3:40',
            'artists' => ['The Weeknd'],
        ],

        'Attention' => [
            'duration' => '3:17',
            'artists' => ['The Weeknd'],
        ],

        'Ordinary Life' => [
            'duration' => '3:41',
            'artists' => ['The Weeknd'],
        ],

        'Nothing Without You' => [
            'duration' => '3:18',
            'artists' => ['The Weeknd'],
        ],

        'All I Know (Feat. Future)' => [
            'duration' => '5:21',
            'artists' => ['The Weeknd', 'Future'],
        ],

        'Die For You' => [
            'duration' => '4:20',
            'artists' => ['The Weeknd'],
        ],

        'I Feel It Coming (Feat. Daft Punk)' => [
            'duration' => '4:29',
            'artists' => ['The Weeknd', 'Daft Punk'],
        ],

];
    ?>

    <section class="grid">
        <div class="col-left">

         <img src="https://images-na.ssl-images-amazon.com/images/I/81pX%2BM-8cuL._SL1400_.jpg">

            <h1>Starboy</h1>
            <h4>The Weeknd</h4>
            <p>2016</p>

            <button>
             <a>LECTURE</a>
         </button>
        </div>

        <div class="col-right">
            <ul class="musics-list">
                <?php foreach ($musics as $title => $meta): ?>
                    <li class="music-item">
                        <div class="music-meta">
                        <span><?php echo $title; ?></span>
                        <span class="music-duration"><?php echo $meta['duration']; ?></span>
                        </div>
                        <ul class="artists-list">
                            <?php foreach ($meta['artists'] as $artist): ?>
                                <li class="artist-item">
                                    <small><?php echo $artist; ?></small>
                                </li>
                            <?php endforeach; ?>
                         </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

</main>

    <?php require_once 'includes/footer.php'; ?>