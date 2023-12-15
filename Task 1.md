![2134](https://github.com/Nom1o/Secure_Software_Practice-4/assets/125586725/aae83793-374a-49a9-832f-1a3d48d62fc2)

В этом фрагмение возможна SQL-инъекция так как ввод через параметр $id никак не проверяется
```
$getid  = "SELECT first_name, last_name FROM users WHERE user_id = '$id';";
```
