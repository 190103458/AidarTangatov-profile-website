<!DOCTYPE html>
<html>
<head>
	<title>Create new client</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body >
    <form method="POST" action=' {{route('add-post')}}'>
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="body" placeholder="body">
        <button type='submit'>Create</button>
    </form>
</body>
</html>
