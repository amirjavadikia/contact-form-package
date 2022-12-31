<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">contact us page</h1>

    <form action="{{ route('contact') }}"  class="my-3 container"  method="post">
        @csrf
        <input type="text" class="form-control my-3" name="name" placeholder="your name">
        <input type="email" class="form-control my-3" name="email" placeholder="your email">
        <textarea name="message"  class="form-control my-3"  cols="30" rows="10" placeholder="your message"></textarea>
        <input type="submit" class="btn btn-success my-3" value="submit">
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
