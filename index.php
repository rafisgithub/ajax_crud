<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Crud</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Ajax cRud opearation</h1>
       
            <input id="name" type="text" placeholder="Name">
            <input id="email" type="email" placeholder="Email">
            <input id="password" type="password" name="password" placeholder="Password">
            <button class="btn">insert Data</button>

            <h1>Reading data from Db </h1>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>

    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./ajax.js"></script>
</body>
</html>