<?php
require_once('settings.php');
require_once('glogin.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}
?>
<head>
<style type="text/css">

#information-container {
	width: 400px;
	margin: 50px auto;
	padding: 20px;
	border: 1px solid #cccccc;
}

.information {
	margin: 0 0 30px 0;
}

.information label {
	display: inline-block;
	vertical-align: middle;
	width: 150px;
	font-weight: 700;
}

.information span {
	display: inline-block;
	vertical-align: middle;
}

.information img {
	display: inline-block;
	vertical-align: middle;
	width: 100px;
}

</style>
</head>

<body>

<div id="information-container">
	<div class="information">
		<label>Name</label><span><?= $user_info['name'] ?></span>
	</div>
	<div class="information">
		<label>ID</label><span><?= $user_info['id'] ?></span>
	</div>
	<div class="information">
		<label>Email</label><span><?= $user_info['email'] ?></span>
	</div>
	<div class="information">
		<label>Email Verified</label><span><?= $user_info['verified_email'] == true ? 'Yes' : 'No' ?></span>
	</div>
	<div class="information">
		<label>Picture</label><img src="<?= $user_info['picture'] ?>" />
	</div>
</div>
<?php
$PdoQuery = "SELECT * FROM uporabniki WHERE (username = '".$_SESSION['name']."')";
                $PdoQuery_run = $pdo -> query($PdoQuery);
                if($PdoQuery_run){
                while($row = $PdoQuery_run->fetch(PDO::FETCH_OBJ))
                    {
   
                        if($_SESSION['name'] != $row->username)
                        {
                        $sql = "INSERT INTO uporabniki VALUES(NULL,:username,:email,:pass,NULL,NULL,1,NULL,NULL)";

                            $handle = $pdo->prepare($sql);
                            $params = [
                                ":username" =>$name,
                                ":email" =>$email,
                                ":pass"=>'1'
                            ];
                            
                            $handle->execute($params);
                        }
					}
                    
                } 
                             header("Location: ../index.php")
						?>
</body>
</html>