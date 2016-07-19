<html>
	<head>
        <title>Tabela COR 1.0</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mystyles.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            
            <h1>Tabela COR</h1>
            <p>Simple Budget Organizer</p>
            <hr/>
             <?php include "components/tabela-cor.php"; ?>
        </div> <!-- Container --> 
        
        <!-- SCRIPTS -->

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/chart.js"></script>
        <script type="text/javascript" src="js/jspdf.debug.js"></script>
        <?php include "components/script.php"; ?>

    </body>
</html>