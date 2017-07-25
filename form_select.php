<?php
define('MESICE', array(1=>"leden","únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec"));
function Mesice()
{
    echo "\t<SELECT>\n";
    for ($i=1; $i<= count(MESICE); $i++) {
        echo "\t\t<OPTION VALUE=$i>".MESICE[$i]."</OPTION>\n";
    }
    echo "\t</SELECT>";
}
?> 
<FORM> 
<?php Mesice()?> 
</FORM>