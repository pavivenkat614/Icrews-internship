<!DOCTYPE html>
<html>
<head>
    <title>Database Record</title>
    <link href="css/seedercss/tables.css" rel="stylesheet" type="text/css" />
    <link href="css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <ul>
        <li style="margin-left : 450px"><a href="/assignment-record">View assignment record</a></li>
         <li><a href="/">Go back</a></li>
         <li><a href="/marks-record">View marks record</a></li>
    </ul>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email address</td>
            <td>student/teacher</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->user }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>