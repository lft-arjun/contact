<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Contact Us any time</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="first_name" class="form-control" id="firstname" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="firstname">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="lastname" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html> 