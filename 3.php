<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>

<body>
    <script type="text/javascript">
        var x = new Array();
        var input = prompt("Masukkan nilai x :");


        for (i = 1; i <= input; i++) {
            x[i] = new Array();
            for (j = 1; j <= i; j++) {
                if (j == 1 || j == i) {
                    x[i][j] = 1;
                } else {


                    x[i][j] = x[i - 1][j - 1] + x[i - 1][j];
                }
            }
        }


        for (i = 1; i <= input; i++) {
            for (j = 1; j <= i; j++) {
                document.write(x[i][j] + " ");
            }
            document.write("<br>")
        }
    </script>
</body>

</html>