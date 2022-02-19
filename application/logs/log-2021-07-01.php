ERROR - 2021-07-01 02:19:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%Y) '2021'
ORDER BY `tanggal` DESC' at line 3 - Invalid query: SELECT *
FROM `transaksi_zakat_masuk`
WHERE date_format(tanggal, %Y) '2021'
ORDER BY `tanggal` DESC
ERROR - 2021-07-01 02:19:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%Y) '2021'
ORDER BY `tanggal` DESC' at line 3 - Invalid query: SELECT *
FROM `transaksi_zakat_masuk`
WHERE date_format(tanggal, %Y) '2021'
ORDER BY `tanggal` DESC
ERROR - 2021-07-01 02:20:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '%Y) '2021'' at line 3 - Invalid query: SELECT *
FROM `transaksi_zakat_masuk`
WHERE date_format(tanggal, %Y) '2021'
ERROR - 2021-07-01 02:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'
AND date_format(tanggal, "%Y") '2021'' at line 3 - Invalid query: SELECT *
FROM `transaksi_zakat_masuk`
WHERE date_format(tanggal, "%m") '1'
AND date_format(tanggal, "%Y") '2021'
ERROR - 2021-07-01 02:21:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'
AND DATE_FORMAT(tanggal, "%Y") '2021'' at line 3 - Invalid query: SELECT *
FROM `transaksi_zakat_masuk`
WHERE DATE_FORMAT(tanggal, "%m") '1'
AND DATE_FORMAT(tanggal, "%Y") '2021'
ERROR - 2021-07-01 02:38:17 --> Query error: Unknown column 'tahun' in 'where clause' - Invalid query: SELECT sum(jumlah) as total, date_format(tanggal, "%Y") as tahun
FROM `transaksi_zakat_masuk`
WHERE `tahun` = '2021'
ERROR - 2021-07-01 02:38:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''2021'' at line 3 - Invalid query: SELECT sum(jumlah) as total, date_format(tanggal, "%Y") as tahun
FROM `transaksi_zakat_masuk`
WHERE date_format(tanggal, "%Y") '2021'
ERROR - 2021-07-01 02:38:39 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'zakat.transaksi_zakat_masuk.tanggal'; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT sum(jumlah) as total, date_format(tanggal, "%Y") as tahun
FROM `transaksi_zakat_masuk`
WHERE date_format(tanggal, "%Y") = '2021'
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 36
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 37
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 37
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 45
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 54
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 54
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 55
ERROR - 2021-07-01 02:46:27 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 55
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 36
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 37
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 37
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 45
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 54
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 54
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 55
ERROR - 2021-07-01 02:46:51 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 55
ERROR - 2021-07-01 02:48:49 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) D:\laragon\www\2021\zakat\application\models\Transaksi_Masuk.php 93
ERROR - 2021-07-01 02:48:58 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ']' D:\laragon\www\2021\zakat\application\models\Transaksi_Masuk.php 95
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 36
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 37
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 37
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 45
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 54
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 54
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 55
ERROR - 2021-07-01 02:49:09 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 55
ERROR - 2021-07-01 02:51:23 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 45
ERROR - 2021-07-01 02:51:23 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:51:23 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 46
ERROR - 2021-07-01 02:51:23 --> Severity: Notice --> Trying to get property 'total' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 54
ERROR - 2021-07-01 02:51:23 --> Severity: Notice --> Trying to get property 'tahun' of non-object D:\laragon\www\2021\zakat\application\views\components\admin\dashboard.php 55
ERROR - 2021-07-01 02:51:38 --> Severity: Notice --> Undefined variable: data D:\laragon\www\2021\zakat\application\models\Transaksi_Keluar.php 88
ERROR - 2021-07-01 02:51:38 --> Severity: Notice --> Undefined variable: tahun D:\laragon\www\2021\zakat\application\models\Transaksi_Keluar.php 88
ERROR - 2021-07-01 02:51:38 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT sum(jumlah) as total, date_format(tanggal, "%Y") as tahun
FROM `transaksi_zakat_keluar`, `data_user`
WHERE date_format(tanggal, "%Y") = '2020'
AND `id` = '1'
GROUP BY date_format(tanggal, "%Y")
ERROR - 2021-07-01 02:52:02 --> Severity: Notice --> Undefined variable: tahun D:\laragon\www\2021\zakat\application\models\Transaksi_Keluar.php 90
