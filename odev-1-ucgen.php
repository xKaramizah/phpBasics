<?php
function ucgen($adet)
{
    $say = 0;
    while ($adet > 0){
        for ($i = 0; $i <= $say; $i++){
            echo '0';
        }
        echo '<br>';
        $say++;
        $adet--;
    }
}
ucgen(15);
?>
