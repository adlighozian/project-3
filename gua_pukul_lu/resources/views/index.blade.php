<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pukul bumi | ghz</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="/img/logo.png" rel="shortcut icon">
</head>

<body>
    <h1>pukul aja palanya, sampe bunyi plak!!</h1>

    <button type="button" class="mulai" onclick="mulai()">Mulai!</button>

    <h2 class="papan-skor">0</h2>

    <div class="container">
        <div class="tanah">
            <div class="pala"></div>
        </div>
        <div class="tanah">
            <div class="pala"></div>
        </div>
        <div class="tanah">
            <div class="pala"></div>
        </div>
        <div class="tanah">
            <div class="pala"></div>
        </div>
        <div class="tanah">
            <div class="pala"></div>
        </div>
        <div class="tanah">
            <div class="pala"></div>
        </div>
    </div>

    <audio src="/audio/Pop.mp3" id="pop"></audio>
    <script src="/js/script.js"></script>
</body>

</html>
