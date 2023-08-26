<?php
error_reporting(-1);

//$arr_cities=['Yekaterinburg', 'Moscow'];
$file_path ='data/cities.txt';

$json_cities=file_get_contents($file_path);
$arr_cities=json_decode($json_cities);
/*print_r($json_cities);
echo '<br/>';
print_r($arr_cities);
echo '<br/>';
print_r($_POST);
echo '<br/>';*/
if (isset($_POST['enter_city']))
{
    $city = trim($_POST['enter_city']);
    /*var_dump($city);
    print_r($arr_cities);
    echo '<br/>';
    print_r($arr_cities);
    echo '<br/>';
    var_dump(in_array($_POST['enter_city'], $arr_cities));
    echo '<br/>';*/
    if (!in_array($_POST['enter_city'], $arr_cities)&&$city!=''){
        print_r($_POST['enter_city']);
        array_push($arr_cities, $city);
        print_r($arr_cities);
        echo '<br/>';
    }

}
if (json_encode($arr_cities))$json_cities=json_encode($arr_cities);
file_put_contents($file_path,$json_cities);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>

<div class="container">
    <form method="post">
        <div class="mb-3 mt-5">
            <input type="text" class="form-control" name="enter_city" id="" placeholder="enter name of city">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    foreach ($arr_cities as $city){
        echo '<table border="1" width="25%"><tr>'."<td>$city</0></td>";
}
    echo '</tr></table>';

    ?>
</div>

</body>
</html>
