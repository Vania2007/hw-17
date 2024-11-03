<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1, form {
            margin: 15px;
        }
        input {
            margin: 5px 0 10px;
        }
        main {
            display: flex;
            justify-content: space-evenly;
        }
        
    </style>
</head>

<body>
    <main>
        <section id="get">
            <h1>Form (GET)</h1>
            <form action="profile.php" method="GET">
                <input type="text" name="name" placeholder="Your Name" required><br />
                <label for="date">Your birthday:</label><br>
                <input type="date" name="date" placeholder="Your birthday" required><br />
                <input type="tel" name="tel" id="tel-get" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Your phone" required><br/>
                <input type="email" name="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}\.[a-zA-Z]{2,}" placeholder="Ваш email" required><br/>
                <input type="password" name="pass" id="" placeholder="Your password" require><br/>
                <input type="submit" value="Send" />
            </form>
        </section>
        <section id="post">
            <h1>Form (POST)</h1>
            <form action="profile.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required><br />
                <label for="date">Your birthday:</label><br>
                <input type="date" name="date" required><br />
                <input type="tel" name="tel" id="tel-post" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Your phone" required><br/>
                <input type="email" name="email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}\.[a-zA-Z]{2,}" placeholder="Ваш email" required><br/>
                <input type="password" name="pass" id="" placeholder="Your password" require><br/>
                <input type="submit" value="Send" />
            </form>
        </section>
    </main>
    <script>
        const inputGet = document.getElementById('tel-get');
        inputGet.addEventListener('input', function(e) {
            formatPhoneNumber(this);
        });

        const inputPost = document.getElementById('tel-post');
        inputPost.addEventListener('input', function(e) {
            formatPhoneNumber(this);
        });

        function formatPhoneNumber(input) {
            let value = input.value.replace(/\D/g, '');
            if (value.length > 3) {
                value = value.slice(0, 3) + '-' + value.slice(3);
            }
            if (value.length > 7) {
                value = value.slice(0, 7) + '-' + value.slice(7);
            }
            input.value = value;
        }
    </script>
</body>
</html>