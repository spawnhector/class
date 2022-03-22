

<?php
class testext extends text {
    public function textMessage(){
        $errorMsg = 'Error:'.$this->gettext();
    }
}
$num=5;
try{
    if($num==5){
        throw new testext("num = $num");
    }
    else{
        echo "not 5";
    }
}
catch(testext $m){
    echo $m->message();
}
?>