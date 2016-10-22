<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8"/>
    <title> Field Info </title>
    <link rel = "stylesheet" type = "text/css" href = "FieldInfoStyle.css">
</head>

<body>

<h1 >Field Information Gathering</h1>

<form action = "InfoParser.php" method = "POST">
    <b>First name:</b>
    <input class="formInput" type="text" name="firstname"><br>

    <b>Last name:</b>
    <input class="formInput" type="text" name="lastname"><br>

    <b>Cell number (no spaces or dashes):</b>
    <input class="formInput" type="text" pattern="^\d{10}$" name="number" maxlength="10"><br>

    <b>Gender:</b><br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other<br>

    <b>Veteran</b>
    <input type="checkbox" name="veteranstatus"><br>

    <b>Mental Health Concerns</b>
    <input type="checkbox" name="mentalstatus"><br>

    <b>Date of Birth:</b><br>
    <input class="formInput" type="text" name="dob"><br>

    <b>Ethnicity:</b><br>
    <input type="radio" name="ethnicity" value="Hispanic/Latino"> Hispanic/Latino<br>
    <input type="radio" name="ethnicity" value="Not Hispanic/Latino"> Not Hispanic/Latino<br>
    <input type="radio" name="ethnicity" value="Prefer not to respond"> Prefer not to respond<br>

    <b>Race:</b><br>
    <input type="checkbox" name="race" value="American Indian/Alaska Native"> American Indian/Alaska Native<br>
    <input type="checkbox" name="race" value="Asian"> Asian<br>
    <input type="checkbox" name="race" value="Black or African American"> Black or African American<br>
    <input type="checkbox" name="race" value="Native Hawaiian/Pacific Islander"> Native Hawaiian/Pacific Islander<br>
    <input type="checkbox" name="race" value="White"> White<br>

    <input type="text" maxlength="12" onkeyup="phoneFormat(this)" default="xxx-xxx-xxxx" name="Phone" id="Phone">
    <div id="PhoneTip"></div>

    <input type="submit" value="Submit">

    <script src="InputValidation.js"></script>

</form>

<!--
<iframe
        width="600"
        height="450"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDe6G7axgFfrBkqGMLt7YH-CaWM3frqsrI
    &q=Space+Needle,Seattle+WA" allowfullscreen>
</iframe>
-->

</body>
</html>
