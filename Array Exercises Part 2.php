<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    print "<h4> PHP script to count a total number of duplicate elements in an array </h4>";
    $text = file ("file.txt");

    $count_values = array();
    foreach ($text as $dups) {

     @$count_values[$dups]++;

}
    echo 'Total number of duplicate elements found in the array is: '.count($count_values);
    ?>

    <?php 
    print "<h4>PHP script to count the frequency of each element of an array</h4>";
    $text = file ("file.txt");

    $n = array_fill(0, count($text), 0);
    $check = -1;
    for($i = 0; $i < count($text); $i++){
        $count = 1;

    for($j = $i+1; $j < count($text); $j++){
        
        if($text[$i] == $text[$j]){ 
            $count++;
            $n [$j] = $check;
        }
    }

    if($n [$i] != $check) 
        $n [$i] =$count;
}

print " The frequency of given array elements: ";
for( $i = 0; $i < count($n ); $i++){
    if($n [$i] != $check){
        echo("<br>" . $text[$i] ." occurs " );
        echo( $n [$i]." times.");
        echo(" ");
    }
}
    ?>

    <?php 
    print "<h4> PHP script to separate odd and even integers in separate arrays </h4>";

    $text = file("file.txt"); 

    echo "<b>The Odd Elements are:</b>" . "<br>";
    for($i = 0; $i < count($text); $i++){
        if(intval($text[$i]) %2!=0){
            print "$text[$i]";
        }
    }

    echo "<br>"."<b>The Even Elements are:</b>" . "<br>";
        for($i = 0; $i < count($text); $i++){
            if(intval($text[$i])%2==0){
                print "$text[$i]";
            }
        }
    ?>


</body>
</html>