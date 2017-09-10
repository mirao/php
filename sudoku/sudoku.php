<?php
/** 
 * Solve Sudoku
 *
 * Run: php sudoku.php <sudoku_easy.txt
 * Output: solved Sudoku
 */

/** Sudoku puzzle */
class Sudoku {

    const EMPTY_CELL = ' ';

    /** @var array Sudoku matrix */ 
    private $matrix;
    
    /** 
    * @var array List of found numbers with given coordinates 
    * E.g.:
    * [['row' => 1, 'col' => 2, 'num' => 9],
    * ['row' => 2, 'col' => 6, 'num' => 1]]
    */ 
    private $foundNumbers;
    
    /** @var int Last found number */ 
    private $lastNum;
    
    /** @var bool Restart computing because last filled number is incorrect */ 
    private $restart;
    

    public function __construct()
    {
        $this->matrix = [];
        $this->foundNumbers = [];
        $this->lastNum = 0;
        $this->restart = true;
    }

    /** Is restart of computing needed */
    public function getRestart() {
        return $this->restart;
    }

    /** Read Sudoku from stdin */
    public function readSudoku()
    {
        $stdin = fopen('php://stdin', 'r');
        $rowId = 0;
        while ($row = trim(fgets(STDIN), "\n")) {
            $row = str_replace("|", "", $row);
            $this->matrix[$rowId++] = str_split($row);
        }
    }

    /** Display Sudoku to stdout */
    public function printSudoku() {
        foreach ($this->matrix as $row) {
            $row = implode("|", str_split(implode("", $row), 3));
            echo $row, PHP_EOL;
        }
    }

    /**
     * Does number fulfil Sudoku requirements?
     * I.e. is it unique in row, column and square?
     * @param int $rowId Row where number was filled
     * @param int $colId Column where number was filled
     * @param int $num Number which was filled
     */
    private function isNumberCorrect($rowId, $colId, $num)
    {
        // Is number unique in row?
        for ($j = 0; $j < 9; $j++) {
            if ($colId != $j) {
                if ($num == $this->matrix[$rowId][$j]) {
                    return false;
                }
            }
        }
    
        // Is number unique in column?
        for ($i = 0; $i < 9; $i++) {
            if ($rowId != $i) {
                if ($num == $this->matrix[$i][$colId]) {
                    return false;
                }
            }
        }

        // Is number unique in square?
        $squareRowStart = floor($rowId / 3) * 3;
        $squareColStart = floor($colId / 3) * 3;
        for ($i = $squareRowStart; $i < $squareRowStart + 3; $i++) {
            for ($j = $squareColStart; $j < $squareColStart + 3; $j++) {
                if ($rowId != $i && $colId != $j) {
                    if ($num == $this->matrix[$i][$j]) {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    /** Find all numbers in Sudoku */
    public function findNumbers()
    {
        $this->restart = false;
        for ($rowId = 0; $rowId < 9; $rowId++) {
            for ($colId = 0; $colId < 9 ; $colId++) { 
                if ($this->matrix[$rowId][$colId] != self::EMPTY_CELL) {
                    continue;
                }
                $numberCorrect = false;
                for ($num = $this->lastNum + 1; $num <= 9; $num++) {
                    $this->matrix[$rowId][$colId] = $num;
                    if ($this->isNumberCorrect($rowId, $colId, $num)) {
                        $numberCorrect = true;
                        $this->foundNumbers[] = ['row' => $rowId, 'col' => $colId, 'num' => $num];
                        break;
                    }
                }
                if (!$numberCorrect) {
                    while (!empty($this->foundNumbers)) {
                        // Found number isn't correct, remove it
                        $num = array_pop($this->foundNumbers);
                        $this->lastNum = $num['num'];
                        $this->matrix[$rowId][$colId] = self::EMPTY_CELL;
                        $this->matrix[$num['row']][$num['col']] = self::EMPTY_CELL;
                        if ($this->lastNum < 9) {
                            $this->restart = true;
                            break 3; // Interrupt computing so that last found number can be fixed
                        }
                    }
                    die("Unable to solve Sudoku, it is invalid" . PHP_EOL);
                }
                $this->lastNum = 0;
            }
        }
    }
}

// Main app
$sudoku = new Sudoku;
$sudoku->readSudoku();
while ($sudoku->getRestart()) { // Compute until all numbers are correct
    $sudoku->findNumbers();
}
$sudoku->printSudoku();