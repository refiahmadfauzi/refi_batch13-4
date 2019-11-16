<?php
//method pengecekan username field
function isAcceptedUsername($username) {
          return preg_match('/^[A-Z]{7,7}$/',$username) ;
     }
 // Cara menggunakan fungsi di atas
     if (isAcceptedUsername("ARKDEMY")) {
         echo "Username Is Valid" ;
     } else {
         echo "Username Is Invalid" ;
     }
//method pengecekan password field
function isAcceptedPassword($password) {
  return preg_match('/^[0-9]{3}+*[A-Za-z]{3,7}$/', $password);
	}
 // Cara menggunakan fungsi di atas
     if (isAcceptedPassword("111*sss")) {
         echo "Password Is Valid" ;
     } else {
         echo "Password Is Invalid" ;
     }

//telah diuji di https://www.onlinegdb.com/ by refi ahmad fauzi
?>