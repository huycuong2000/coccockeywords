<?php
$myfile = fopen("data.json", "r") or die("Unable to open file!");
$haa = fread($myfile, filesize("data.json"));

$haha = json_decode($haa);

$kw_par = $haha->paid_keywords;
$kw_free = $haha->organic_query;
?>
<table style="width:30%;float: left;">
    <tr style="border: 1px solid brown;">
        <th >Tu khoa tra tien</th>
        <th>Click</th> 

    </tr>
    <?php
    foreach ($kw_par as $key => $value) {
        ?>
        <tr>
            <td style="border: 1px solid brown;"><?php echo $value->name; ?></td>
            <td style="border: 1px solid brown;"><?php echo $value->value; ?></td> 
        </tr>
        <?php
    }
    ?>


</table>
<table style="width:30%;float: left;margin-left: 5%;">
    <tr style="border: 1px solid brown;">
        <th >Tu khoa tu nhien</th>
        <th>Click</th> 

    </tr>
    <?php
    foreach ($kw_free as $key => $value) {
        ?>
        <tr>
            <td style="border: 1px solid green;"><?php echo $value->name; ?></td>
            <td style="border: 1px solid green;"><?php echo $value->value; ?></td> 
        </tr>
        <?php
    }
    ?>


</table>