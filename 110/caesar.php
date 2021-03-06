<!DOCTYPE html>
<html lang="en">
<head>
    <script defer src="caesar.js"></script>
    <?php include_once '../head.html' ?>
    <meta property="og:title" content="Caesar Cipher Decoder">
    <meta property="og:description" content="Decodes text that is encoded via Caesar cipher.">
    <meta property="og:site_name" content="NachoToast">
    <meta property="og:image" content="https://nachotoast.com/img/good_boye.jpg">
    <title>Caesar Decoder</title>
    <style>
        #container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            width: 100%;
        }
        #container > p {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        include_once '../header.php';
    ?>
    <h1 style='text-align: center;'>NachoToast's Caesar Cipher Decoder</h1>
    <div>
        <input id="input_string" placeholder="Input String" min="1" max="100" style="width: 200px; margin-bottom: 10px; font-size: 20px;" autofocus oninput="dothing()">
        <input type="checkbox" id="mode" oninput="encode = this.checked; dothing()">
        <label for="mode">Encode</label>
        <input type="checkbox" id="mode2" oninput="(this.checked) ? chosen_language = 'Korean' : chosen_language = 'English'; dothing()">
        <label for="mode2">Korean</label>
    </div>
    <div id='container'>
        <p class='output' style='display: none'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
        <p class='output'></p>
    </div>
</body>
</html>