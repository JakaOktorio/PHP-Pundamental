# PHP-Pundamental

# Algoritma LOGIN :

1. Langkah pertama mulai
2. Isi username dan password
3. Cek ussername dan password benar atau salah
4. Jika benar, maka akan melanjutkan proses baca menu kemudian tampil user menu
5. Jika salah, maka proses ini akan kembali ke proses 2, setiap proses login error session akan ditambah 1
dan apabila proses masih salah akan diulang maksimal sebanyak 3x.
Dan jika melebihi batas maksimal maka akun akan diblokir.
6. Selesai.
===============================================================================

# Pseudocode
```sh
Start
session_start()
input user name dan password
if ($username == $user && $password == $pass)
	$_SESSION['user'] = $username;
else
if isset($_SESSION[''block])
	$_SESSION['block']++;
else
	$_SESSION['block']=1;
end.

session_start();
if $_SESSION["salah"] >= 4;
echo alert('Anda Diblokir') to.location ('error.php');
}
```
===============================================================================

# Flowchart
![f](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/flowchar.png)

===============================================================================

# Screenshot Hasil :

![Halaman Login](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot1%20halaman%20login.jpg)
![Jika Login sukses](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_login%20berhasil.jpg)
![Halaman Utama Stelah login berhasil](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_halaman%20utama%20jika%20login%20berhasil.jpg)
![sas](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_berhasil%20log%20out.jpg)
![s](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_kembali%20kemenu%20login%20setelah%20selesai%20log%20out.jpg)
![s](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_ketika%20username%20atau%20pasword%20salah.jpg)
![s](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_keluar%20peringatan%20berapa%20kali%20salah%20login.jpg)
![s](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_jika%20salah%203%20kalih%20login%20keempat%20salah%20maka%20di%20blokir.jpg)
![s](https://github.com/JakaOktorio/PHP-Pundamental/blob/master/Login/Screenshot%20hasil/Screenshot_menu%20help.jpg)
