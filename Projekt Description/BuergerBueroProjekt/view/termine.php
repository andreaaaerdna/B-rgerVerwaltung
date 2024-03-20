<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terminvereinbarung</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Terminvereinbarung</h1>
    </div>
    <div class="main">
      <form>
        <label for="dienstleistung">Dienstleistung:</label>
        <select id="dienstleistung">
          <option value="sales">Sales</option>
          <option value="researchanddevelopment">Research and Development</option>
          <option value="services">Services</option>
          <option value="support">Support</option>
          <option value="training">Training</option>
          <option value="accounting">Accounting</option>
          <option value="productmanagement">Product Management</option>
          <option value="humanresources">Human Resources</option>
          <option value="marketing">Marketing</option>
          <option value="businessdevelopment">Business Development</option>
          <option value="legal">Legal</option>
          <option value="engineering">Engineering</option>
          
          <!-- Weitere Dienste hier -->
        </select>
        <br>
        <br>

        <label>Wochentage:</label>
        <br>
        <input type="checkbox" id="montag" name="wochentage" value="montag">
        <label for="montag">Montag</label>
        <input type="checkbox" id="dienstag" name="wochentage" value="dienstag">
        <label for="dienstag">Dienstag</label>
        <input type="checkbox" id="mittwoch" name="wochentage" value="mittwoch">
        <label for="mittwoch">Mittwoch</label>
        <input type="checkbox" id="donnerstag" name="wochentage" value="donnerstag">
        <label for="donnerstag">Donnerstag</label>
        <input type="checkbox" id="freitag" name="wochentage" value="freitag">
        <label for="freitag">Freitag</label>
        <br>
        <br>

        <label>Zeitfenster:</label>
        <br>
        <input type="checkbox" id="vormittags" name="zeitfenster" value="vormittags">
        <label for="vormittags">Vormittags</label>
        <input type="checkbox" id="nachmittags" name="zeitfenster" value="nachmittags">
        <label for="nachmittags">Nachmittags</label>
        <br>
        <br>

        <input type="submit" value="Termin suchen">
      </form>
      <br>

      <h2>Datum</h2>
      <!-- Hier wird der Kalender eingefügt -->
      <br>

      <label for="freie-termine">Freie Termine:</label>
      <select id="freie-termine">
        <option value="termin1">Termin 1</option>
        <option value="termin2">Termin 2</option>
        <!-- Weitere freie Termine hier -->
      </select>
      <br>
      <br>

      <input type="button" value="Buchen">
    </div>
    <div class="footer">
      <p>Kontaktinformationen</p>
    </div>
  </div>
</body>
</html>
