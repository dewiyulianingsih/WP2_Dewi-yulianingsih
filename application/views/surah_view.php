<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Surah Details</title>
</head>
<body>
    <?php if(isset($surahs) && is_array($surahs)): ?>
        <?php foreach($surahs as $surah): ?>
            <div>
                <h2><?php echo $surah['nama']; ?> (<?php echo $surah['asma']; ?>)</h2>
                <p>Arti: <?php echo $surah['arti']; ?></p>
                <p>Ayat: <?php echo $surah['ayat']; ?></p>
                <p>Tipe: <?php echo $surah['type']; ?></p>
                <p>Urut: <?php echo $surah['urut']; ?></p>
                <p>Rukuk: <?php echo $surah['rukuk']; ?></p>
                <audio controls>
                    <source src="<?php echo $surah['audio']; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <p>Keterangan: <?php echo $surah['keterangan']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Data surah tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
