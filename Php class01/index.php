<?php
session_start();
// print_r('5');
// var_dump('5');
// A-Z,a-z,0-9,_

// $frist_name = false;

// var_dump($frist_name);


// $fruits = [["sesonal","nonseasonal"],"bananna","orange","mango"];

// echo $fruits;
// echo "<pre>";
// print_r($fruits[0][1]);
// echo "</pre>"
// $fruits = ['seasonal'=>['pre-seasonal'=>['type1','type2'],'late-season'=>"Original type"],'non-seasonal'=>'Bananna'];
// echo "<pre>";
// print_r($fruits['seasonal']['pre-seasonal'][1]);
// echo "</pre>"

// if(5>6){
//     echo 'Congratulations!';
// }else{
//     echo 'Alas! I am undone';
// }


// $age = 18;
// if($age>=18){
//     echo "<h1 style='color:green;'>You are eligible for vote!</h1>";
// }elseif($age<=0){
//     echo "Inavlid Input";
// }else{
//     echo "You are not eligible";
// }

// $marks = 30;
// if($marks>100 or $marks<0 ){
//     echo "Inavlid";
// }

// function welcomeMessage(){
//     return 5;
//     echo 'Hello';
// }
// echo welcomeMessage()+10;
// welcomeMessage();
// welcomeMessage();
// welcomeMessage();

// name : 
// Id : 
// BG : 

// for($num = 0; $num<10; $num++ ){
    //     echo "The number is : $num <br>";
    // }
//     $num = 0;
//     while($num<10){
//     echo "The number is : $num <br>";
//    $num++;
// }
// $num =11;
// do{
//     echo "the number is $num";
//     $num++;
// }while($num<10)

// $fruits = ['red'=>'apple','green'=>'apple'];

// for($num= 0; $num<count($fruits);$num++){
//     echo "$fruits[$num]<br>";
// }

// foreach ($fruits as $key=>$fruit) {
//     echo "$key<br>";
// }


// $text = "php";

// // function test(){
// //     print_r($GLOBALS['text']) ;
// // }
// // test()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <div class="conatiner">
    <div class="card col-md-6 mx-auto mt-4">
        <div class="card-body">
            <form action="./output.php" method="POST">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
               

                    <?php
                        if(isset($_SESSION['name_err'] )){?>
                            <span class="text-danger"><?= $_SESSION['name_err'] ?> 
                        </span>
                        <?php }
                    ?>

              
                <label for="">Email</label>
                <input type="email" class="form-control" name="email">
                <button type="submit" class="btn btn-success mt-2 w-100" name="submit">Submit</button>
            </form>
        </div>
    </div>
  </div>
</body>
</html>

<?php
    session_unset();
?>