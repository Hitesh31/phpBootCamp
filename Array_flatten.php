<?
# First Example
$matrix = array(array(2),array(3), array(4, 5), array(6,7), array(8));
$flattenArray=(array) null;
foreach ($matrix as $temp) {
    foreach ($temp as $value) {
        array_push($flattenArray,$value);
    }
}
#print_r($flatten_array);
$arrayString = print_r($flattenArray, true);
echo str_replace("\n", "", $arrayString);
