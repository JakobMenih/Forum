<?php
include '../google-api/vendor/autoload.php';
                         $clientID='772937072465-8dltrboubm9j543s95o2qcs29ecdcn3k.apps.googleusercontent.com';
                         $clientSecret='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';
                         $redirectUrl = 'https://www.forum.menih.top/login.php';
                         
                         $client = new Google_Client();
                         
                         $client->setClientId($clientID);
                         
                         $client->setClientSecret($clientSecret);
                         $client->setRedirectUri($redirectUrl);
                         $client->addScope('profile');
                         $client->addScope('email');
                        
                          if(isset($_GET['code'])){
                             $client->authenticate($_GET['code']);
                             $access_token = $client->getAccessToken();
                                
                              $gauth = new Google_Service_Oauth2($client);
                              $google_info = $gauth->userinfo->get();
                              $email = $google_info->email;
                              $name = $google_info->name;
                              $password = $google_info->password;
                              $_SESSION['namu'] = $google_info->name;
                             
                $PdoQuery = "SELECT * FROM uporabniki WHERE (username = '".$_SESSION['namu']."')";
                $PdoQuery_run = $pdo -> query($PdoQuery);
                if($PdoQuery_run){
                while($row = $PdoQuery_run->fetch(PDO::FETCH_OBJ))
                    {
   
                        if($_SESSION['namu'] != $row->username)
                        {
                        $sql = "INSERT INTO uporabniki values(NULL,:username,:email,:pass,NULL,NULL,1,NULL,NULL)";

                            $handle = $pdo->prepare($sql);
                            $params = [
                                ":username" =>$username,
                                ":email" =>$email,
                                ":pass"=>'123'
                            ];
                            
                            $handle->execute($params);
                        }
                    }
                    
                } 
                             header("Location: ../index.php");
                         }
                        else{
                            echo "<a href='".$client->createAuthUrl()."' class='btn-google m-b-10'>
                                    <img src='images/icons/icon-google.png' alt='GOOGLE'>
                                    Google
                                    </a>";
                        }

                    ?>
