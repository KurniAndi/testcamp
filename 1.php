<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        function reverse(param) {
            var x = param.length,
                y = '';
            while (x > 0) {
                y += param[x - 1];
                x--;
            }
            return y;
        }

        var word = prompt("masukkan angka: ");
        // var word = "kasur itu hanyut";
        if (word === reverse(word)) {
            document.write("Kata `" + word + "` termasuk bilangan Palindrome.");
        } else {
            document.write("Kata `" + word + "` termasuk bukan bilangan Palindrome.");
        }
    </script>
</body>

</html>