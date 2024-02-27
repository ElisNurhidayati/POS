<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Point of Sales - User Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }
        h1 {
            color: #e74c3c;
            font-size: 50px;
        }
        p {
            font-size: 22px;
            color: #34495e;
        }
        table.table thead th {
            font-size: 24px;
        }
        table.table tbody td {
            font-size: 20px;
        }
    </style>
</head>
<body>
<main class="container">
    <h1>Greetings success!</h1>
    <h2>Welcome to your profile in our Point of Sales system</h2>
    <p>Always ready to help you succeed!</p>
    <div>
        <table class="table table-striped">
            <thead>
               <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Name</th>
                </tr>
            </thead>
           <tbody>
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $name }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
  </body>
</html>
