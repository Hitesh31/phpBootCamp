<?php
$json ='{"players" :[{ "name":"Ganguly","age":45,"address":{"city":"Hyderabad"}},{"name":"Dravid","age":45,"address":{"city":"Bangalore"}},{"name":"Dhoni","age":37,"address":{"city":"Ranchi"}},{"name":"Virat","age":35,"address":{"city":"Delhi"}},{"name":"Jadeja","age":35,"address":{"city":"Hyderabad"}},{"name":"Jadeja","age":35,"address":{"city":"Mumbai"}}]}';
$players = json_decode($json, true);
$playerNames=(array) null;
$playerCity=(array) null;
$playerAge=(array) null;
$playersDecoded = $players["players"][0]["name"];
$playerNameAgePair = (array) null;
foreach ($players["players"] as $p) {
        array_push($playerNames,$p["name"]);
        array_push($playerAge,$p["age"]);
        array_push($playerNameAgePair, array(
            "name"=>$p["name"],
            "age"=>$p["age"]));
        array_push($playerCity,$p["address"]["city"]);
}

usort($playerNameAgePair, function ($item1, $item2) {
    return $item2["age"] <=> $item1["age"];
});
$playerUnique = array_unique($playerNames);
print_r($playerNames);
print_r($playerAge);
print_r($playerCity);
print_r($playerUnique);
print_r(array($playerNameAgePair[0]["name"],$playerNameAgePair[1]["name"]));