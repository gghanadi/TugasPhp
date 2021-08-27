<?php
$hasilX = [];
$hasilY = [];
$finalX =[];
$finalY =[];
    for($i=1;$i<=8;$i++){
        $x = rand(1,8);
        $y = rand(1,8);
        echo "masukan bidak $i". "\n";
        if($i==1){
            $x=2;
            $y=1;
            echo $x.",".$y. "\n";
            $hasilX[] = $x;
            $hasilY[] = $y;
        }else{
            echo $x.",".$y. "\n";
            $hasilX[] = $x;
            $hasilY[] = $y;
        }
        
    }

    //hasil di sini jika jalan yang di hitung satu persatu jadi bidak 1 di bandingkan dengan bidak 2

    // for($x=0;$x<=7;$x++){
    //     if($x%2==0){
    //         continue;
    //     }
    //     else if($x+1>7){
    //         break;
    //     }
    //     else if($hasilY[$x]==$hasilY[$x+1]){
    //         $finalX[]=$hasilX[$x];
    //         $finalY[]=$hasilY[$x];
    //     }else if($hasilX[$x]!=$hasilX[$x+1]){
    //             $finalX[]=$hasilX[$x];
    //             $finalY[]=$hasilY[$x];

    //     }else if($x==6){
    //         break;
    //     }
    //     else{
    //         continue;
    //     }
    // }
    // if($finalX==null || $finalX==0){
    //     echo "tidak ditemukan";
    // }else{
    //     var_dump($finalX);
    //     echo "\n";
    //     var_dump($finalY);
    // }

    //ini jika bidak 1 di bandingkan dengan semua bidak terlebih dahulu
    for($x=0;$x<=7;$x++){
        for($y=$x+1;$y<=7;$y++){
            if($hasilY[$x]==$hasilY[$y] && $hasilX[$x]!=$hasilX[$y]){
                $finalX[]=$hasilX[$y];
                $finalY[]=$hasilY[$y];
            }else if($hasilX[$x]==$hasilX[$y] && $hasilY[$x]!=$hasilY[$y]){
                $finalX[]=$hasilX[$y];
                $finalY[]=$hasilY[$y];
    
            }
        }
    }
    echo "Hasil : \n";
    if($finalX==null || $finalX==0){
        echo "tidak ditemukan";
    }else{
        $countFinal = count($finalX);
        for($z=0;$z<$countFinal;$z++){
            echo "($finalX[$z],$finalY[$z])";
        }
    }

?>