<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2 class="text-center mt-5 mb-3">Contact Us</h2>
    <form action="9.submit_contact.php" method="post" class="form-control">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" class="form-control" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" class="form-control"  required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" class="form-control"  rows="4" required></textarea><br><br>
        <input type="submit" value="Submit" name="submit" class="btn btn-secondary mb-5 btn-block">
    </form>
    </div>
</body>
</html>
