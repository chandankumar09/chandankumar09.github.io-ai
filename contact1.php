<?php
//variable setting
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$query=$_REQUEST['query'];
//check input field
if(empty($name) || empty($email) || empty($query))
{
    echo "please fill all the field";
}
else
{
    mail("chandankumar1822001@gmail.com","AI KLU Message", $query ,"From: $name<$email> ");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>