<!DOCTYPE html>
<html>
<head>
    <title>Полинка</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);


    
        //Произведение положительных элементов массива
        $proizv = 1;
        for($i=0; $i<count($myArray); $i++){
            if($myArray[$i]>0){
                $proizv*=$myArray[$i];
            }
        }

        //Сумма элементов массива, расположенных до минимального элемента
        $IndMin=0;
            for($i=1; $i<count($myArray); $i++){
                if($myArray[$i]<$myArray[$IndMin]){
                    $IndMin=$i;
                }
            }

        $sumEl = 0;
        for($m=0; $m<$IndMin; $m++){
            $sumEl+=$myArray[$m];
        }

        //Массив, где сначала упорядочены нечетные числа, а потом четные
        sort($myArray, $SORT_NUMERIC);
        $Arr1=[];
        $Arr2=[];
        for($l=0; $l<count($myArray); $l++){
            if(abs($myArray[$l])%2==1){
                $Arr1[]=$myArray[$l];
            }
            else{
                $Arr2[]=$myArray[$l];
            }
        }
        $myArray = array_merge($Arr1, $Arr2);
       
        echo "Произведение положительных элементов массива: ".$proizv."; Сумма элементов массива, расположенных до минимального элемента: ".$sumEl."; Массив, где сначала упорядочены нечетные числа, а потом четные:</br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>