<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/handle-form.php" method="post">
    <input type="text" name="username" id="username" placeholder="username"><br/>
    <input type="password" name="password" id="password" placeholder="password">

    <br>

    <label for="gender_F">Femme</label>
    <input type="radio" name="gender" id="gender_F" value="F">
    <label for="gender_H">Homme</label>
    <input type="radio" name="gender" id="gender_H" value="H">
    <label for="gender_O">Autre</label>
    <input type="radio" name="gender" id="gender_O" value="O">

    <br>

    <label for="transport_velo">Velo</label>
    <input type="checkbox" name="transport[]" id="transport_velo" value="velo">
    <label for="transport_moto">Moto</label>
    <input type="checkbox" name="transport[]" id="transport_moto" value="moto">
    <label for="transport_auto">Auto</label>
    <input type="checkbox" name="transport[]" id="transport_auto" value="auto">

    <br>
    <label for="animal">Ton animal préféré : </label>
    <select name="animal" id="animal">
        <option value="dog">Chien</option>
        <option value="cat">Chat</option>
        <option value="fish">Poisson con</option>
    </select>

    <br>
    <button type="submit">GO</button>

</form>




</body>
</html>
