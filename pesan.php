<html>
<head>
<title> Pesan anda </title>
<link type="text/css" rel="stylesheet"
href="style.css"/>
</head>

<body>
	<div id="loginForm">
		<p>
        <div id="formHeader">Pesan anda</div>
            <div id="formBody">
                <div class="formField">
                Nama 	:
				<?php 
                    echo $_POST['name'];
                    echo "<br/>";
                    ?>
                </div>
                <div class="formField">
                Email	:
                <?php
					echo $_POST['email'];
					echo "<br/>";
				?>
                </div>
                <div class="formField" style="font-size:16px">
                <br/>
                
                <strong><i>Pesan :</i></strong>
                <br/>
                <?php
				echo $_POST['message'];
				"<br/>";
				?>
                </div>
            </div>
          </p>
        </div>
     </body>
  </html>
	
