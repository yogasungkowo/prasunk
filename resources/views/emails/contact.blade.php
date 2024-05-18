<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">New Contact Form Submission</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <p>{{ $name }}</p>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <p>{{ $email }}</p>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
