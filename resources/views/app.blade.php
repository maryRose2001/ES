<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 16px;">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My App Project</title>
		@vite
	</head>
	<body class="antialiased bg-light-100">
		@inertia
	</body>
</html>

<style>
body{
    background-image: url('../images/Lo.jpg');
    margin-top: 5px;
    background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;

}
h2{
    font-size: 30vh;
    color: rgb(7, 3, 120);
    text-shadow: rgb(rgb(255, 191, 0), rgb(0, 75, 128), rgb(255, 0, 123));
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
</style>
