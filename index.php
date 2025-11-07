<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Converter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <header class="app-header">
        <h1>Audio Converter</h1>
    </header>

    <main class="converter-main">
        <div class="logo-container">
            <img src="jdlogob.png" alt="Jonom Digital Logo">
        </div>

        <div class="converter-title">
            <h2>Audio Converter</h2>
        </div>

        <form action="<YOUR_PHP_BACKEND_URL>" method="post" enctype="multipart/form-data" class="converter-form">
            
            <div class="form-step">
                <label for="file-upload">1. Open files</label>
                <input id="file-upload" type="file" name="audioFile" required>
            </div>

            <div class="form-step">
                <label for="format-select">2. Convert to:</label>
                <select id="format-select" name="outputFormat">
                    <option value="mp3">mp3</option>
                    <option value="wav">wav</option>
                    <option value="m4a">m4a</option>
                    <option value="flac">flac</option>
                    <option value="ogg">ogg</option>
                    <option value="wma">wma</option>
                    <option value="aiff">aiff</option>
                </select>
            </div>

            <div class="form-step">
                <label for="convert-button" class="sr-only">3. Convert</label>
                <button id="convert-button" type="submit" class="convert-button">Convert</button>
            </div>

        </form>
    </main>

</body>
</html>
