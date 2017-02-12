<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 *
 */
class ChapterArrayFunction extends Chapter
{
    /**
     * Example 2.1
     *
     * Instruksi
     * Carilah panjang array yang di-inputkan
     */
    public function whatSize()
    {
        // CODE HERE
        $returnFunction = count;

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Example 2.2
     *
     * Instruksi
     * Urutkan array yang menjadi inputan
     * dari kecil ke besar
     */
    public function orderMe()
    {
        // CODE HERE
        $returnFunction = function($inputArray) {
            for($i = 0; $i < count($inputArray); $i++){
                for($j = 0; $j < count($inputArray) - 1; $j++){
                    if($inputArray[$j] > $inputArray[$j + 1]) {
                        $temp = $inputArray[$j];
                        $inputArray[$j] = $inputArray[$j + 1];
                        $inputArray[$j + 1] = $temp;
                    }
                }
            }
            return $inputArray;
        };

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 2.3
     *
     * Instruksi
     * Hitunglah jumlah kemunculan nilai tertentu
     * dalam sebuah array
     */
    public function howOftenYouSeeMe()
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $returnFunction;
    }



    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 2;
        $this->name = 'Function array';

        $this->exerciseTests = [
            'whatSize' => function () {
                $result = $this->whatSize();
                $test1 = array(1,2,3,4);
                if ($result( $test1 ) != 4 ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 4 untuk data [1,2,3,4].');
                }
                $test2 = array(1,2);
                if ($result( $test2 ) != 2 ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 2 untuk data [1,2].');
                }
            },
            'orderMe' => function () {
                $result = $this->orderMe();
                $test1 = array(4,1,2,3);
                if ($result( $test1 ) != [1,2,3,4] ) {
                }
                    throw new \Exception('$returnFunction harusnya menghasilkan [1,2,3,4] untuk data [4,1,2,3].');
                $test2 = array(1,2,1);
                if ($result( $test2 ) != [1,1,2] ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [1,1,2] untuk data [1,2,1].');
                }
            },
            'howOftenYouSeeMe' => function () {
                $result = $this->howOftenYouSeeMe();
                $test1 = array(4,1,2,3);
                if ($result( $test1 ) != array(
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1
                )) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (1 => 1, 2 => 1, 3 => 1, 4 => 1) untuk data [4,1,2,3].');
                }
                $test2 = array(1,2,1);
                if ($result( $test2 ) != array(
                    1 => 2,
                    2 => 1
                )) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (1 => 2, 2 => 1) untuk data [1,2,1].');
                }
            },
        ];
    }
}
