<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonuçlar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page-container">
    <div class="container results-container"> <!-- results-container isteğe bağlı ek bir sınıf -->
        <h1>Karşılaştırma Sonuçları</h1>

        <div class="preview-section">
            <?php if(!empty($preview_img_src)): ?>
                <img src="<?php echo htmlspecialchars($preview_img_src); ?>" alt="Preview Image">
                <h2><?php echo htmlspecialchars($preview_label); ?></h2>
            <?php else: ?>
                <p>Önizleme yok</p>
            <?php endif; ?>
        </div>

        <?php if($result && mysqli_num_rows($result) > 0): ?>
            <p>Eşleşen hesaplar bulundu:</p>
            <div class="results-grid">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($row['profile_img_url']); ?>" alt="Profile Image">
                    <div class="username"><?php echo htmlspecialchars($row['username']); ?></div>
                    <div class="platform"><?php echo htmlspecialchars($row['platform']); ?></div>
                    <a href="<?php echo htmlspecialchars($row['profile_img_url']); ?>" target="_blank">Profil Resmini Aç</a>
                </div>
            <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>Hiçbir hesapla eşleşme bulunamadı.</p>
        <?php endif; ?>

        <a class="back-link" href="index.php">Geri Dön</a>
    </div>
</div>
</body>
</html>
