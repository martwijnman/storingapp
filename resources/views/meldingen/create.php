<?php require_once __DIR__.'/../../../config/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once __DIR__.'/../components/head.php'; ?>
</head>

<body>

    <?php require_once __DIR__.'/../components/header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="<?php echo $base_url; ?>/app/Http/Controllers/meldingenController.php" method="POST">

            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="">- kies type - </option>
                    <option value="A">achtbaan</option>
                    <option value="B">draaiend</option>
                    <option value="C">kinder</option>
                    <option value="D">horeca</option>
                    <option value="E">show</option>
                    <option value="F">water</option>
                    <option value="G">overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="group" id="group">
                    <option value="">- kies groep - </option>
                    <option value="CEO">1CEO</option>
                    <option value="MAG">2managment</option>
                    <option value="AFD">3afdeling</option>
                </select>
            </div>
            <div class="form-group">
                <label for="more">overig</label>
                <input name="more" type="textarea">
            </div>

            <input type="submit" value="Verstuur melding">

        </form>
    </div>

</body>

</html>
