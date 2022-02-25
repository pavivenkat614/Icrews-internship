<!DOCTYPE html>
<html>
<head>
    <title>Database Record</title>
    <link href="css/seedercss/tables.css" rel="stylesheet" type="text/css" />
    <link href="css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>
<ul>
    <li style="margin-left : 450px"><a href="/marks-record">View marks record</a></li>
    <li><a href="/">Go back</a></li>
</ul>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Assignment Name</td>
            <td>submission status</td>
        </tr>
        @foreach ($assignments as $assignment)
        <tr>
            <td>{{ $assignment->id }}</td>
            <td>{{ $assignment->assignmentname }}</td>
            <td>{{ $assignment->submissionstatus }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>