<html>
<head> <title> html read page</title></head>
<body>
<?php
include("simplehtmldom_1_5/simple_html_dom.php");
#dl tag has all the values so we just need to read dl tag in html file
#
echo "Hi there";
$html = file_get_html('AK-0226/National Admin 80838 app.html');
echo "<pre>";
foreach($html->find('div .span4') as $element) {
    //echo $element->plaintext. '<br>';;

    echo $element->innertext. '<br>';;
    //print_r($element) ;

//    echo $element->dd; /// . '<br>';
}
echo "</pre>";
//dump_html_tree($html);

?>
</body>
</html>
