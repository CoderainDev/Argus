<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argus - Görsel Analiz</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page-container">
        <header class="header">
            <div class="header-inner">
                <h1 class="logo">Argus Görsel Karşılaştırma</h1>
                <nav class="nav">
                    <a class="nav-link" href="index.php">Anasayfa</a>
                    <a class="nav-button" href="login.php">Giriş Yap</a>
                </nav>
            </div>
        </header>
        
        <section class="tribute-section">
            <div class="tribute-content">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/240px-Flag_of_Turkey.svg.png" alt="Türk Bayrağı" class="tribute-flag">
                <span class="tribute-text">03.02.2020 anısına ithafen</span>
            </div>
        </section>

        <main class="main-content">
            <div class="card">
                <h2>Görsel Analiz Aracı</h2>
                <p>Bir görsel yükleyin veya URL üzerinden görsel ekleyerek karşılaştırmaya başlayın.</p>
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image_file">Görsel Yükle:</label>
                        <input type="file" name="image_file" id="image_file" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="image_url">Veya Görsel URL Gir:</label>
                        <input type="text" name="image_url" id="image_url" placeholder="http://...">
                    </div>

                    <div class="form-group">
                        <input class="submit-btn" type="submit" value="Karşılaştır">
                    </div>
                </form>
            </div>
        </main>

        <footer class="footer">
            <p>&copy; <?php echo date('Y'); ?> Argus - Tüm Hakları Saklıdır.</p>
        </footer>
    </div>
</body>
</html>
