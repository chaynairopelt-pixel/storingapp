<?php require_once __DIR__ . '/../../../config/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once __DIR__ . '/../components/head.php'; ?>
</head>

<body>

    <?php require_once __DIR__ . '/../components/header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <?php if (($_GET['error'] ?? '') === 'capaciteit'): ?>
            <div class="msg">Vul een geheel getal tussen 0 en 2147483647 in voor de capaciteit.</div>
        <?php endif; ?>

        <form action="<?php echo $base_url; ?>/app/Http/Controllers/meldingenController.php" method="POST">

            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <!-- hier komt een dropdown -->
                 <select id="type" name="type" required>
  <option value="">-- kies een type --</option>
  <option value="achtbaan">Achtbaan</option>
  <option value="draaiend">Draaiende attractie</option>
  <option value="water">Waterattractie</option>
  <option value="overig">Overig</option>
</select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" max="2147483647" step="1" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>

            <input type="submit" value="Verstuur melding">

        </form>
    </div>

</body>

</html>
