<?php
ini_set('display_errors', 1);

$value = filter_input(INPUT_GET, 'value', FILTER_SANITIZE_NUMBER_FLOAT,
    FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND);
$given_type = filter_input(INPUT_GET, 'given_type');
$wanted_type = filter_input(INPUT_GET, 'wanted_type'); 

if (!isset($value)) { $your_name = ''; }

       $array = array       
  (
  '0' => Array
    (
        'metric' => 'metric',
        'us' => 'us',
        'uk' => 'uk'
    ),
  
  '1' => Array
    (
        'metric' => '1',
        'us' => '00000',
        'uk' => 'n/a'
    ),

  '2' => Array
    (
        'metric' => '1.25',
        'us' => '0000',
        'uk' => 'n/a'
    ),
  '3' => Array
    (
        'metric' => '1.5',
        'us' => '000',
        'uk' => 'n/a'
    ),
  '4' => Array
    (
        'metric' => '1.75',
        'us' => '00',
        'uk' => 'n/a'
    ),
  '5' => Array
    (
        'metric' => '2.0',
        'us' => '0',
        'uk' => '14'
    ),
   '6' => Array
    (
        'metric' => '2.25',
        'us' => '1',
        'uk' => '13'
    ),
   '7' => Array
    (
        'metric' => '2.5',
        'us' => '1.5',
        'uk' => 'n/a'
    ),
   '8' => Array
    (
        'metric' => '2.75',
        'us' => '2',
        'uk' => '12'
    ),
   '9' => Array
    (
        'metric' => '3.0',
        'us' => '2.5',
        'uk' => '11'
    ),
   '10' => Array
    (
        'metric' => '3.25',
        'us' => '3',
        'uk' => '10'
    ),
   '11' => Array
    (
        'metric' => '3.5',
        'us' => '4',
        'uk' => 'n/a'
    ),
   '12' => Array
    (
        'metric' => '3.75',
        'us' => '5',
        'uk' => '9'
    ),
   '13' => Array
    (
        'metric' => '4.0',
        'us' => '6',
        'uk' => '8'
    ),
   '14' => Array
    (
        'metric' => '4.5',
        'us' => '7',
        'uk' => '7'
    ),
   '15' => Array
    (
        'metric' => '5.0',
        'us' => '8',
        'uk' => '6'
    ),
   '16' => Array
    (
        'metric' => '5.5',
        'us' => '9',
        'uk' => '5'
    ),
   '17' => Array
    (
        'metric' => '6.0',
        'us' => '10',
        'uk' => '4'
    ),
   '18' => Array
    (
        'metric' => '6.5',
        'us' => '10.5',
        'uk' => '3'
    ),
   '19' => Array
    (
        'metric' => '7.0',
        'us' => '10.75',
        'uk' => '2'
    ),
   '20' => Array
    (
        'metric' => '7.5',
        'us' => '10.875',
        'uk' => '1'
    ),
   '21' => Array
    (
        'metric' => '8.0',
        'us' => '11',
        'uk' => '0'
    ),
   '22' => Array
    (
        'metric' => '9.0',
        'us' => '13',
        'uk' => '00'
    ),
   '23' => Array
    (
        'metric' => '10.0',
        'us' => '15',
        'uk' => '000'
    ),
   '24' => Array
    (
        'metric' => '12.0',
        'us' => '17',
        'uk' => 'n/a'
    ),
   '25' => Array
    (
        'metric' => '15.0',
        'us' => '19',
        'uk' => 'n/a'
    ),
   '26' => Array
    (
        'metric' => '20.0',
        'us' => '36',
        'uk' => 'n/a'
    ),
   '27' => Array
    (
        'metric' => '25.0',
        'us' => '25',
        'uk' => '50'
    ),
   '28' => Array
    (
        'metric' => '30.0',
        'us' => 'n/a',
        'uk' => 'n/a'
    ),
   '29' => Array
    (
        'metric' => '35.0',
        'us' => 'n/a',
        'uk' => 'n/a'
    )
   );
   
// find the coordinating conversion values
$key = array_search($value, array_column($array, $given_type));
if ($key === false){
	$answer = 'n/a';
}else {
	$answer = $array[$key][$wanted_type];
}

$answer_f = '';
if ($wanted_type == 'metric'){
	$answer_f = $answer . ' mm';
} elseif ($wanted_type == 'us') {
	$answer_f = 'U.S. Size ' . $answer;
} elseif ($wanted_type == 'uk') {
	$answer_f = 'U.K. Size ' . $answer;
} 


include 'conversion_view.php';
?>