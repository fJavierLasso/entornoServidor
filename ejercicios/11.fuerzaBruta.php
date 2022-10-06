<!-- $2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72 -->
<?php
set_time_limit(0);

function sampling($chars, $size, $combinations = array()) {

    # if it's the first iteration, the first set 
    # of combinations is the same as the set of characters
    if (empty($combinations)) {
        $combinations = $chars;
    }

    # we're done if we're at size 1
    if ($size == 1) {
        return $combinations;
    }

    # initialise array to put new values in
    $new_combinations = array();

    # loop through existing combinations and character set to create strings
    foreach ($combinations as $combination) {
        foreach ($chars as $char) {
            $new_combinations[] = $combination . $char;
        }
    }

    # call same function again for the next iteration
    return sampling($chars, $size - 1, $new_combinations);

}

$chars = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y');
$output = sampling($chars, 4);

for ($i=0;$i<count($output);$i++) {
    if (password_hash($output[$i],PASSWORD_DEFAULT) == 
    "$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72") {
        echo $output[$i];
    }
}

// for ($i="a";$i<"z";$i++) {
//     for ($j="a";$j<"z";$j++) {
//         for ($k="a";$k<"z";$k++) {
//             for ($l="a";$l<"z";$l++) {
//               echo ($i.$j.$k.$l);
//               echo '<br>';
//             }
//         }
//     }
// }
// function fuerzaBruta($array){

//     for ($a=0;$a<count($array);$a++) {
//       for($i=0;$i<27;$i++){
//         if (password_hash($array[0].$array[1].$array[2].$array[3],PASSWORD_DEFAULT)
//             == "$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72"){
//                 echo ($array[0].$array[1].$array[2].$array[3]);
//                 break;
//         } else {
//             echo $array[0].$array[1].$array[2].$array[3];
//             if ($array[$a]<'z'){
//               $array[$a]++;  
//             }
            
//             echo '<br>';
//         }
//     }  
//     }
    
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>