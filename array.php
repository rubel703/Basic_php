<?php

/* three kind of array 
1.index array 
2.associative array 
3.multidimensional array */ 

/* $city = array('dhaka','barisal','noakhali'); //index array
    print_r($city);
    echo $city[1]."<br>"; 
    foreach($city as $values){
        echo $values."<br>";
    } */

$city = array('dhaka','barisal','noakhali'); //index array
    echo "<ol>";  //html tag used 
    foreach($city as $values){
       echo "<li>$values</li>";
    }
    echo "</ol>";

/* $run=['shakib'=>75,'musfiq'=>30,'tamim=>45']; //associative array: key=>value

    echo $run['musfiq'];
    print_r($run); */

/* $stuents=[
    $std1=[
        'rubel',101,
        'hena',102,
        'farhan',103
    ],
    $std2=[
        'gazi',203,
        'rasel',202,
        'kabir',204
    ]
];
//  print_r($stuents);
foreach($stuents as $values){
    echo $values[$std1];
} */