<html>
    <head>
        <title> Meu primeiro site em PHP </title>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <style type="text/css">
            .linha{
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>
    </head>

    <body>
        <?php
            for($i = 0 ; $i < 10 ; $i++){
                print("<span class=\"linha\">Contador: " . $i + 1 . "</span><br/>");
            }
            print("FIm de contagem")
        ?>

    </body>

    <script type="text/javascript">
        $(document).ready(function(){
            alert("FEITO!!!");
        });
    </script>

</html>