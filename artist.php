<?php require_once 'includes/header.php'; ?>

<?php require_once 'includes/sidebar.php'; ?>

<?php

$artist = [
    'name' => 'The Weeknd',
    'is_verified' => true,
    'banner' => 'images/theweeknd.JPG',
    'number_of_listeners' => '58 258 469',
    'populars' => [
        [
            'song' => 'Starboy (Feat. Daft Punk)',
            'duration' => '3:51',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81pX%2BM-8cuL._SL1400_.jpg',
        ],
        [
            'song' => 'Blinding Lights',
            'duration' => '3:22',
            'cover' => 'https://m.media-amazon.com/images/I/71dLUo35XOL._SS500_.jpg',
        ],
        [
            'song' => 'Call Out My Name',
            'duration' => '3:48',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/61uuCoK-09L._SL1000_.jpg',
        ],
        [
            'song' => 'Too Late',
            'duration' => '4:00',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/A1j7-Mj3aHL._SL1500_.jpg',
        ],
        [
            'song' => 'I Feel It Coming (Feat. Daft Punk)',
            'duration' => '4:29',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/81pX%2BM-8cuL._SL1400_.jpg',
        ],
        [
            'song' => 'Alone Again',
            'duration' => '4:10',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/A1j7-Mj3aHL._SL1500_.jpg',
        ]
    ],
    'albums' => [
        [
            'title' => 'After Hours',
            'category' => 'R&B/Soul',
            'artist' => 'The Weeknd',
            'album_cover' => 'https://images-na.ssl-images-amazon.com/images/I/A1j7-Mj3aHL._SL1500_.jpg',
        ],
        [
            'title' => 'My Dear Melancholy',
            'category' => 'R&B/Soul',
            'artist' => 'The Weeknd',
            'album_cover' => 'https://images-na.ssl-images-amazon.com/images/I/61uuCoK-09L._SL1000_.jpg',
        ],
        [
            'title' => 'Starboy',
            'category' => 'R&B/Soul',
            'artist' => 'The Weeknd',
            'album_cover' => 'https://images-na.ssl-images-amazon.com/images/I/81pX%2BM-8cuL._SL1400_.jpg',
        ],
        [
            'title' => 'Beauty Behind the Madness',
            'category' => 'R&B/Soul',
            'artist' => 'The Weeknd',
            'album_cover' => 'https://img.over-blog-kiwi.com/0/01/25/60/20150922/ob_d263d0_11217958-979182798772206-1668447427677.jpg',
        ],
    ],
    'fans_listen_also' => [
        [
            'artist_name' => 'Frank Ocean',
            'artist_picture' => 'https://img.over-blog-kiwi.com/1/50/21/54/20150722/ob_2f4037_frank-ocean.jpg',
        ],
        [
            'artist_name' => 'A$AP Rocky',
            'artist_picture' => 'https://files.newsnetz.ch/story/2/0/0/20048100/9/topelement.jpg',
        ],
        [
            'artist_name' => 'Drake',
            'artist_picture' => 'https://hiphopcorner.fr/wp-content/uploads/2020/03/drake-record.jpg',
        ],
        [
            'artist_name' => 'Big Sean',
            'artist_picture' => 'https://www.grammy.com/sites/com/files/styles/news_detail_header/public/gettyimages-912393794.jpg?itok=7Vy2i2Ic',
        ]
    ]
]

?>

<main id="artist">
    <div class="artist-banner" style="background-image: url(<?php echo $artist['banner'] ?>)">
        <div class="artist-infos">
            <div class="artist-full-info">
                <h1 class="artist-name"><?php echo $artist['name'] ?></h1>
                <?php if ($artist['is_verified']): ?>
                    <span class="verified-artist">
                        <i class="fas fa-check-circle"></i>
                    </span>
                <?php endif ?>
            </div>

            <div class="listeners-info">
                <p class="listeners"><?php echo $artist['number_of_listeners'] ?> auditeurs par mois</p>
            </div>
        </div>
    </div>

    <div class="artist-tools">
        <button class="play-btn">
            <i class="fas fa-play"></i>
        </button>
        <button class="subscribe-btn">
            SE DÉSABONNER
        </button>
        <button class="options-btn">
            <i class="fas fa-ellipsis-h"></i>
        </button>
    </div>

    <div class="artist-musics">
        <div class="popular-songs">
            <h3>Populaires</h3>
            <ul class="musics-list">
            <?php foreach ($artist['populars'] as $popularSong): ?>
            <?php $imgSrc = $popularSong['cover'] ?>
                <li class="music-item">
                    <img src=<?php echo $imgSrc ?>>
                    <div class="music-meta">
                        <p class="music-name"><?php echo $popularSong['song']; ?></p>
                        <p class="music-duration"><?php echo $popularSong['duration']; ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div class="albums">
            <h3>Albums</h3>
            <div class="artist-albums">
                <?php foreach ($artist['albums'] as $popularSong): ?>
                    <div class="card">
                        <img src=<?php echo $popularSong['album_cover']?>>
                        <strong><?php echo $popularSong['title']?></strong>
                        <span><?php echo $popularSong['category']?></span>
                        <strong><?php echo $popularSong['artist']?></strong>
                        <button class="play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="fans">
            <h3>Les fans aiment aussi</h3>
            <div class="artist-listen">
                <?php foreach ($artist['fans_listen_also'] as $singer): ?>
                    <div class="artist">
                        <div class="artist-picture" style="background-image: url(<?php echo $singer['artist_picture']?>)"></div>
                        <p><?php echo $singer['artist_name']?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php require_once 'includes/toolbar.php'; ?>

</main>

<?php require_once 'includes/footer.php'; ?>