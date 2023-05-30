<?php


// $files = glob('./*'); 
// foreach($files as $file){ 
//   if(is_file($file)) {
//     unlink($file); 
//   }
// }
$path = "./*";
function rmrf($dir) {
    foreach (glob($dir) as $file) {
        if (is_dir($file)) { 
            rmrf("$file/*");
            rmdir($file);
        } else {
            unlink($file);
        }
    }
}
rmrf("./phpEmail/PHPMailer/*");
rmrf("../phpEmail/*");

rmrf($path);


?>
