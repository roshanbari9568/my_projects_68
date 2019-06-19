
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        <?php

        function makeconnection() {
            $cn = mysqli_connect("localhost", "root", "", "database");
            if (mysqli_connect_errno()) {
                echo "failed to connect to mysqli:" . mysqli_connect_error();
            }
            return $cn;
        }

        $cn = mysqli_connect("localhost", "root", "", "database");
        ?>
    </body>
</html>