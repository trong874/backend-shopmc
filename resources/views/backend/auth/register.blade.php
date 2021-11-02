
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang đăng kí</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}" />
</head>
<body>
<div class="container">
    <h1>Đăng kí</h1>
    <form method="post" action="{{route('register')}}">
        @csrf
        <p>
            <label for="username">Name:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="username">Email:</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            <i class="bi bi-eye-slash" id="togglePassword"></i>
        </p>
        <p>
            <label for="password">Password Confirmation:</label>
            <input type="password" name="password_confirmation"/>
        </p>
        <button type="submit" id="submit" class="submit">Đăng nhập</button>
    </form>
</div>
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        // toggle the icon
        this.classList.toggle("bi-eye");
    });

</script>
</body>
</html>
