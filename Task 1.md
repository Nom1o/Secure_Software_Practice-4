![image](https://github.com/Nom1o/Secure_Software_Practice-4/assets/125586725/6668da6d-433a-44cf-8920-bcd651953c02)

В этом фрагмение возможна SQL-инъекция так как ввод через параметр $id никак не проверяется
```
$getid  = "SELECT first_name, last_name FROM users WHERE user_id = '$id';";
```
