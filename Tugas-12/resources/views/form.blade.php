<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <h1>Form Input</h1>

    <form action="/form" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" />
        <button type="submit">Kirim</button>
    </form>
</body>
</html>