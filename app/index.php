<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php echo file_get_contents("3p.css"); ?>
    </style>
</head>
<body>
    <div id='_3p-right' class="_3p-right-arrow">&raquo;</div>
    <div id="_3p-left" class="_3p-left-arrow">&laquo;</div>
    <div id="_3p-header">Secure _3p PHP</div>
    <div id="body">
        <div id="_3p-left-body" class="_3p-div">1</div>
        <div id="_3p-center-body" class="_3p-div">2</div>
        <div id="_3p-right-body" class="_3p-div">3</div>
    </div>
    <div id="_3p-footer">This is the footer</div>
    <script>
    <?php
        echo file_get_contents("3p-min.js");
    ?>
    </script>
</body>
</html>
