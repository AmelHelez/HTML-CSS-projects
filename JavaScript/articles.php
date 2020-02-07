<!doctype html>
<html>
<head>
    <title>JS</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #333;
            padding: 10px;
        }
    </style>
</head>
<body>
<table id="articles-table">
    <tr>
        <th>ID</th>
        <th>Title</th>
    </tr>
</table>
<script>
    $(document).ready(function() {
        $.get('api.php', function (data) {
            for (let i = 0; i < data.length; i++) {
                $('#articles-table').append('<tr><td>' + data[i].id + '</td><td>' + data[i].title + '</td></tr>');
            }
        })
    });
</script>
</body>
</html>