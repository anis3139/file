<?php

// $fileName="D:\\php practice\\file\\test.php";
// if(is_readable($fileName)){
// $fp= fopen($fileName, 'r');
// // $line= fgets($fp);
// // echo $line;
// // $line= fgets($fp);
// // echo $line;
// rewind($fp);
// while($line= fgets($fp)){
//     echo $line;
// }

// rewind($fp);//print while loop again
// fseek($fp,10);
// fseek($fp,-1,SEEK_END);// end rewind

// while($line= fgets($fp,5)){
//     echo $line."\n";
// }
// fclose($fp);

// $data=file($fileName); //read easyly 
// print_r($data);
// echo $data[2];


//     $data=file_get_contents($fileName);
//     echo $data;
// }

// append mode

// $fileName="D:\\php practice\\file\\t2.php";
// //$existingData=file_get_contents($fileName); // for 'w' mode
// $fp=fopen($fileName, 'a');

// //fwrite($fp, $existingData."\n");// for 'w' mode
// fwrite($fp, "Anis\n");
// fwrite($fp, "Shakil\n");
// fwrite($fp, "Sharif\n");
// fwrite($fp, "Arif\n");
// fwrite($fp, "Nasir\n");



// fclose($fp);

// $fileName="D:\\php practice\\file\\t2.php";
// $student=array(
//    array(
//     'fname'=>'Anichur',
//     'lname'=>'Rahaman',
//     'age'=>26,
// ), 
// array(
//     'fname'=>'Arifur',
//     'lname'=>'Rahaman',
//     'age'=>20,
// ),  
// array(
//     'fname'=>'Nafizurr',
//     'lname'=>'Rahaman',
//     'age'=>40,
// ),  
// array(
//     'fname'=>'Salma',
//     'lname'=>'Rahaman',
//     'age'=>30,
// )
// );

// $newStudent=array(
//     'fname'=>'Rakibur',
//     'lname'=>'Rahaman',
//     'age'=>30,
// );



// $data=serialize($student);
// file_put_contents($fileName,$data,LOCK_EX);

// $dataFormFile=file_get_contents($fileName);
// $allStudents=unserialize($dataFormFile);
// print_r($allStudents);


// array_push($allStudents,$student);
// $dataFormFile=file_get_contents($fileName);
// print_r($dataFormFile);



//unset($allStudents[1]);

// $data=serialize($student);
// $finalStudents=file_put_contents($fileName,$data,LOCK_EX);








//jsoon data

$fileName="D:\\php practice\\file\\t2.php";
$students=array(
   array(
    'fname'=>'Anichur',
    'lname'=>'Rahaman',
    'age'=>26,
), 
array(
    'fname'=>'Arifur',
    'lname'=>'Rahaman',
    'age'=>20,
),  
array(
    'fname'=>'Nafizurr',
    'lname'=>'Rahaman',
    'age'=>40,
),  
array(
    'fname'=>'Salma',
    'lname'=>'Rahaman',
    'age'=>30,
)
);


// $encodeData=json_encode($students);
// file_put_contents($fileName, $encodeData, LOCK_EX);


$data=file_get_contents($fileName);
$allStudents=json_decode($data, true);
print_r($allStudents);

echo $allStudents[1]['fname'];