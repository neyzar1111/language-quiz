<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
	<!-- TODO: add a form for the user to play the game -->

    <form action="" method="post">
        <label for="userGuess">What is the translation of <b><?= $game->selectedWord->frenchWord?></b>  </label>
        <input type="text" id="userGuess" name="userGuess" placeholder="Enter word here">
        <button type="submit" name="submit">Enter</button>
    </form>
        <p><?= $game->message?></p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>