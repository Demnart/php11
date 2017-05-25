<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<form action="/controllers/adduser.php" method="post">
    <table style="border:1px solid black;border-collapse: collapse; text-align: center; margin: 0 auto">
        <tr>
            <td style="border: 1px solid black"><label for="login">Логин</label></td>
            <td style="border: 1px solid black"><input type="text" name="login" id="login"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><label for="password">Пароль</label></td>
            <td style="border: 1px solid black"><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><label for="surname">Фамилия</label></td>
            <td style="border: 1px solid black"><input type="text" name="surname" id="surname"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><label for="name">Имя</label></td>
            <td style="border: 1px solid black"><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black"><label for="lastname">Отчество</label></td>
            <td style="border: 1px solid black"><input type="text" name="lastname" id="lastname"></td>
        </tr>
        <tr>
            <td style="border: 1px solid black" colspan="2"><input type="submit"></td>
          
        </tr>


    </table>
</form>
</body>
</html>