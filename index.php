<?php
// Tusk grades

    // echo $_POST ['user'];

    // if ($_POST['number']<=49) {
    //     echo " Did not succeed";
    // }elseif ($_POST['number']<=70) {
    //     echo " Average";
    // }elseif ($_POST['number']<=86) {
    //     echo " successful";
    // }elseif ($_POST['number']<=100) {
    //     echo " Superior";
    // };

// end Tusk grades

// tusk calculator
    // if ($_POST['op']== '+' ) {
    //     echo $_POST['a'] + $_POST['s'];
    // }elseif($_POST['op']== '-' ){
    //     echo $_POST['a'] - $_POST['s'];
    // }elseif($_POST['op']== '*' ){
    //     echo $_POST['a'] * $_POST['s'];
    // }elseif($_POST['op']== '/' ){
    //     echo $_POST['a'] / $_POST['s'];
    // }else{
    //     echo "non";
    // }

    // **************************
    // ********or****************
    // **************************
    
    // switch ($_POST['op']) {
    //     case '+':
    //         echo $_POST['a'] + $_POST['s'];
    //     break;
    //     case '-':
    //         echo $_POST['a'] - $_POST['s'];
    //     break;
    //     case '*':
    //         echo $_POST['a'] * $_POST['s'];
    //     break;
    //     case '/':
    //         echo $_POST['a'] / $_POST['s'];
    //     break;
    //     // default :
    //     //     echo "Non"
    //     // break;
    // };
// end tusk calculator

// tusk name & number
    // for ($i = 0;10>=$i;$i++) { 
    //     if ($_POST['number'] == $i) {
    //         echo $_POST['name']."<br>";
    //     }else {
    //         echo $i."<br>";
    //     };
    // };
// end tusk name & number

// Array
        // the array it has two type 1(indexed) 2(associative) number 2 Describe or know type array
        // array use print_r(); not echo "";
        // And it has two faces EX 1 $name = array(''); 2 $name = [''];
        // $name = [thes $key('name') => thes $value('ahmed'),'age' =>21];
        // $name = ['name' =>'ahmed','age' =>21];
        // print_r($name);
        // echo $name['name'];
        // $c = count($name);
        // for($i=0;$i<$c;$i++) { 
        //    echo $name[$i] . "<br>";
        // }
      // *****foreach*******
        // $name = ['name' =>'ahmed','age' =>21];
        // foreach ($name as $key => $value) {
        //     echo $value . "<br>";
        // }
      // *****end foreach*******
     // ***multi deminsional array****
        // $persons = [
        //     [
        //         'name' =>'ahmed',
        //         'age' =>21
        //     ],
        //     [
        //         'name' =>'ali',
        //         'age' =>22
        //     ],
        //     [
        //         'name' =>'ana',
        //         'age' =>29
        //     ]
        // ];
        // echo "<pre>"; //view ex array
        // print_r($persons[1]);
            // foreach ($persons as $key => $persons) {
            //     if($key == 0 || $key == 1){
            //         foreach ($persons as $key => $value) {
            //             echo $key . ":" . $value . "<br>";
            //         }
            //         echo "<hr>";
            //     }
                // foreach ($persons as $key => $value) {
                //     echo $key . ":" . $value . "<br>";
                // }
                // echo "<hr>";
            // }
     // ***end multi deminsional array****
// end Array

// tusk star
    //  for ($i=0; $i <6 ; $i++) { 
        // for ($x=0;$x<$i;$x++) { 
            // echo "*";
            // echo $x;
        // }
        // echo "* <br>";
        // echo $i . "<br>";
    // }
// end tusk star

// tusk chess
  ?>
  <!-- //   <table border = "1" width="100%" height="635px"> -->
    <?php
    //     for ($i=0;$i<8;$i++) { 
    //         echo "<tr>";
    //         for ($x=0;$x<8;$x++) { 
    //             if (($x + $i) % 2) {
    //                 echo "<td bgcolor='black'></td>";
    //             }else {
    //                 echo "<td bgcolor='white'></td>";
    //             }
    //         }
    //         echo "</tr>";
    //     }
        ?>
    <!-- //   </table> -->
    <?php
// end tusk chess

// super global
    // *******Send or receive data**********
        // $_POST 
        // $_GET view db in URL and can yuo ues in URL
        // $_REQUEST Can send db $_GET or $_POST
    // ***********************
    // ****Store data and use it anywhere****
        // $_SESSION can send eny array in page on condition
        //  which is writing session_start(); in 1 lin in page use $_SESSION 
        // and Data is stored on the server
        // **********************************************
        // $_COOKIE  Data storage on the client machine
        // writing $_COOKIE setcookie('namecookie',"var own coonie", time cookie ,workin" / name folder or all folder (/)")
        // setcookie('username',"Ahmed", time()+36000 , "/" );
    // ***********************
    // ***Responsible for the uploaded data**
        // $_FILES
    // ***********************
    // ***********data appears***************
        // $_SERVER
    // ***********************
// end super global


