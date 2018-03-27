<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
      include_once 'config/dao.php';
     $dao = new dao();
     $result = $dao->read();
      echo'
        <br> 
        <table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>FullName</th>
				<th>Password</th>
				<th>Email</th>
                                <th>Telpon</th>
                                <th>Baned</th>
                                <th>LoginTime</th>
                                <th>Akses</th>
			</tr>
		</thead>
		<tbody>
                ';
        while ($list = mysqli_fetch_array($result)) {
            echo '<tr>
			<td>' . $list['id'] . '</td>
			<td>' . $list['fullname'] . '</td>
                        <td>' . $list['pass'] . '</td>
                        <td>' . $list['email'] . '</td>
                        <td>' . $list['telp'] . '</td>
                        <td>' . $list['baned'] . '</td>
                        <td>' . $list['logintime'] . '</td>
			<td>' . $list['akses']. '</td>
		</tr>';
        }
        ?>
        </tbody>
        </table>
    </body>
</html>
