<?php

    function PocetDnu ($mesic, $rok)
    {
        return cal_days_in_month(CAL_GREGORIAN, $mesic, $rok);
    }

    // alternative to PocetDnu
    function PocetDnu2($mesic, $rok)
    {
        return date("t", mktime(0, 0, 0, $mesic, 1, $rok));
    }

    function JePrechodnyRok($rok)
    {
        return (boolean) date("L", mktime(0,0,0,1,1,$rok));
    }

    function PrvniDen($mesic, $rok)
    {
        return date("N", mktime(0, 0, 0, $mesic, 1, $rok));
    }

    function Kalendar ($mesic, $rok, $day)
    {
      $mesice=Array(1=>"leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec");
      //kontroly
      if (!is_numeric($mesic)) return "Měsíc musí být číslo!";
      if (!is_numeric($rok)) return "Rok musí být číslo!";
      if ($mesic<1 || $mesic>12) return "Měsíc musí být číslo od 1 do 12";
      if ($rok<1980 || $rok>2050) return "Rok musí být číslo od 1980 do 2050";
      // zjištění počtu sloupců
      $PocetDnu = PocetDnu ($mesic, $rok); $PrvniDen = PrvniDen($mesic,$rok);
      $sloupcu = date("W", mktime(0, 0, 0, $mesic, $PocetDnu-7, $rok)) - date("W", mktime(0, 0, 0, $mesic, 1+7, $rok))+4;
      // vlastní kód
      echo "<TABLE border=\"3\" style=\"border-collapse: collapse\" width=\"",$sloupcu*30,"\">";
      echo "<TR><TD colspan=$sloupcu width=\"",$sloupcu*30,"\" align=\"center\">".$mesice[$mesic]."&nbsp;".$rok."</TD></TR>\n";
      for ($radek=1;$radek<=7;$radek++)
      {
        echo "<TR align=\"center\">";
        for ($sloupec=1; $sloupec<=$sloupcu; $sloupec++) {
            $cur = Bunka($radek, $sloupec, $PrvniDen, $PocetDnu);
            echo "<TD width=\"30\" ". ($day == $cur ? "style=\"font-weight:bold\" bgcolor=\"BurlyWood\"" : "") . ">".$cur."</TD>";
        }
        echo "</TR>\n";
      }
      echo "</TABLE>";
    }

    function Bunka ($radek, $sloupec, $PrvniDen, $PocetDnu)
    {
      $dny=array(1=>"Po", "Út", "St", "Čt", "Pá", "So", "Ne");
      if ($sloupec==1) return $dny[$radek];
      $chcivratit = ($sloupec-2)*7 + $radek - $PrvniDen+1;
      if ($chcivratit<1 || $chcivratit>$PocetDnu) return "&nbsp;"; else return $chcivratit;
    }

    // Kalendar(12, 2016);
    Kalendar(2, 2016, 20);

?>