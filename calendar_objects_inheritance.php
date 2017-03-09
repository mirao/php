<?php
class Kalendar
{
    const DNY = array(1=>"Po", "Út", "St", "Čt", "Pá", "So", "Ne");
    const MESICE = array(1=>"leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec");

    var $mesic;
    var $rok;
    var $error;

    function kalendar($mesic, $rok)
    {
        $this->mesic=$mesic;
        $this->rok=$rok;
    }

    protected function PocetDnu()
    {
        return cal_days_in_month(CAL_GREGORIAN, $this->mesic, $this->rok);
    }

    private function PrvniDen()
    {
        $anglickeporadi = date("w", mktime(0, 0, 0, $this->mesic, 1, $this->rok));
        return ($anglickeporadi==0) ? 7 : $anglickeporadi;
    }

    function Bunka($radek, $sloupec, $PrvniDen, $PocetDnu)
    {
        if ($sloupec==1) {
            return self::DNY[$radek];
        }
        $chcivratit = ($sloupec-2)*7 + $radek - $PrvniDen+1;
        if ($chcivratit<1 || $chcivratit>$PocetDnu) {
            return "&nbsp;";
        } else {
            return $chcivratit;
        }
    }

    function vypis()
    {
        if (!is_numeric($this->mesic)) {
            $this->error = "Měsíc musí být číslo!";
            return;
        }
        if (!is_numeric($this->rok)) {
            $this->error = "Rok musí být číslo!";
            return;
        }
        if ($this->mesic<1 || $this->mesic>12) {
            $this->error = "Měsíc musí být číslo od 1 do 12";
            return;
        }
        if ($this->rok<1980 || $this->rok>2050) {
            $this->error = "Rok musí být číslo od 1980 do 2050";
            return;
        }
        $PocetDnu = $this->PocetDnu();
        $PrvniDen = $this->PrvniDen();
        $sloupcu = date("W", mktime(0, 0, 0, $this->mesic, $PocetDnu-7, $this->rok)) - date("W", mktime(0, 0, 0, $this->mesic, 1+7, $this->rok))+4;
        echo "<TABLE border=\"1\" style=\"border-collapse: collapse\" width=\"",$sloupcu*30,"\">";
        echo "<TR><TD colspan=$sloupcu width=\"",$sloupcu*30,"\" align=\"center\">".$this::MESICE[$this->mesic]."&nbsp;".$this->rok."</TD></TR>\n";
        for ($radek=1; $radek<=7; $radek++) {
            echo "<TR align=\"center\">";
            for ($sloupec=1; $sloupec<=$sloupcu; $sloupec++) {
                $cell = $this->Bunka($radek, $sloupec, $PrvniDen, $PocetDnu);
                if (is_array($cell)) {
                    $style = $cell[0];
                    $value = $cell[1];
                } else {
                    $style = "";
                    $value = $cell;
                }
                echo "<TD width=\"30\" style=\"". $style . "\">" . $value . "</TD>";
            }
            echo "</TR>\n";
        }
        echo "</TABLE>";
    }
}

class BetterCalendar extends Kalendar
{
    var $zvyrazni_dny;
    
    function Bunka ($radek, $sloupec, $PrvniDen, $PocetDnu)
    {
        // echo $this->PocetDnu(); // works because protected method is called from child class
        // echo $this->PrvniDen(); // doesn't work because private method can be called only from the same class as the method is  

        if ($sloupec==1) return $this::DNY[$radek]; // alternative: self::DNY[$radek]
        $chcivratit = ($sloupec-2)*7 + $radek - $PrvniDen+1;
        if ($chcivratit<1 || $chcivratit>$PocetDnu) return "&nbsp;";
        else
        {
        if (in_array($chcivratit, $this->zvyrazni_dny))
            return ["font-weight:bold; background-color:BurlyWood", $chcivratit];
        else 
            return $chcivratit;
        }
    }
}

$prvni_kalendar= new BetterCalendar(2, 2016);
$prvni_kalendar->zvyrazni_dny = Array(1,7,8,13,26);
$prvni_kalendar->vypis();
if ($prvni_kalendar->error) {
    echo $prvni_kalendar->error;
}

// echo $prvni_kalendar->PocetDnu(); // doesn't work because protected method is called outside
// echo $prvni_kalendar->PrvniDen(); // doesn't work because private method is called outside

