<?php
            if(isset($_POST['submit'])){
                $url = "https://script.google.com/macros/s/AKfycbz-ctWXWPjdv5zqlP5y9ZD11KCOElCeGbk406HsVU0VA_JiZKllEnHjCX_I8Ndj4YuIWg/exec";
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POSTFIELDS => http_build_query([
                        "First Name" => $_POST['fName'],
                        "Last Name" => $_POST['lName'],
                        "email" => $_POST['EName'],
                        "number" => $_POST['mNumber'],
                        "message" => $_POST['message'],
                    ])
                ]);
                $result = curl_exec($ch);
                echo $result;
            }
            ?>
