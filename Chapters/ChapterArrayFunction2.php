<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 *
 */
class ChapterArrayFunction2 extends Chapter
{
    /**
     * Example 3.1
     *
     * Instruksi
     * Carilah panjang array yang di-inputkan
     * format method: method($arraySumber)
     */
    public function whatSize()
    {
        // CODE HERE
        $returnFunction = count;

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Example 3.2
     *
     * Instruksi
     * Urutkan array yang menjadi inputan
     * dari kecil ke besar
     * format method: method($inputArray)
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
     * Exercise 3.3
     *
     * Instruksi
     * Informasikan index dari array yang diinputkan
     * format method: method($inputArray)
     */
    public function whatIsMyKey()
    {
        // CODE HERE
        $returnFunction = function() {};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 3.4
     *
     * Instruksi
     * Informasikan index dari array yang diinputkan
     * format method: method($nilaiYangDicariIndexnya, $inputArray)
     */
    public function whereIsMyIndex()
    {
        // CODE HERE
        $returnFunction = function() {};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 3.5
     *
     * Instruksi
     * Informasikan value apa saja yang berbeda
     * diantara 2 array
     * format method: method($inputArray1, $inputArray2)
     */
    public function spotTheDifference()
    {
        // CODE HERE
        $returnFunction = function() {};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 3.6
     *
     * Instruksi
     * Informasikan value apa saja yang sama
     * diantara 2 array
     * format method: method($inputArray1, $inputArray2)
     */
    public function spotTheSimilarity()
    {
        // CODE HERE
        $returnFunction = function() {};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 3.7
     *
     * Instruksi
     * Gabungkan 2 array
     * format method: method($inputArray1, $inputArray2)
     */
    public function combineMe()
    {
        // CODE HERE
        $returnFunction = function() {};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }



    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 3;
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
                    throw new \Exception('$returnFunction harusnya menghasilkan [1,2,3,4] untuk data [4,1,2,3]. Hasil kamu adalah: ' . json_encode($result($test1)));
                }
                $test2 = array(1,2,1);
                if ($result( $test2 ) != [1,1,2] ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [1,1,2] untuk data [1,2,1]. Hasil kamu adalah: ' . json_encode($result($test2)));
                }
            },
            'whatIsMyKey' => function () {
                $result = $this->whatIsMyKey();
                $test1 = array(4,1,2,3);
                if ($result( $test1 ) != [0,1,2,3] ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [0,1,2,3] untuk data [4,1,2,3]. Hasil kamu adalah: ' . json_encode($result($test1)));
                }
                $test2 = array(1,2,1);
                if ($result( $test2 ) != [0,1,2] ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [0,1,2] untuk data [1,2,1]. Hasil kamu adalah: ' . json_encode($result($test2)));
                }
                $test3 = array(
                    0 => 1,
                    "ayam" => 2,
                    "kerbau" => 1
                );
                if ($result( $test3 ) != [0,"ayam","kerbau"] ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [0, "ayam", "kerbau"] untuk data [0 => 1, "ayam" => 2, "kerbau" => 1]. Hasil kamu adalah: ' . json_encode($result($test3)));
                }
            },
            'whereIsMyIndex' => function () {
                $result = $this->whereIsMyIndex();
                $test1 = array(4,1,2,3);
                if ($result( 4, $test1 ) != 0 ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 0 untuk pencarian index data 4 pada array [4,1,2,3]. Hasil kamu adalah: ' . json_encode($result(4, $test1)));
                }
                $test2 = array(1,2,1);
                if ($result( 2, $test2 ) != 1 ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 1 untuk pencarian index data 2 pada array [1,2,1]. Hasil kamu adalah: ' . json_encode($result(2, $test2)));
                }
                $test3 = array(
                    0 => 1,
                    "ayam" => 2,
                    "kerbau" => 3
                );
                if ($result( 3, $test3 ) != "kerbau" ) {
                    throw new \Exception('$returnFunction harusnya menghasilkan "kerbau" untuk pencarian index data 3 pada array [0 => 1, "ayam" => 2, "kerbau" => 1]. Hasil kamu adalah: ' . json_encode($result(3,$test3)));
                }
            },
            'spotTheDifference' => function() {
                $result = $this->spotTheDifference();
                $test1 = array(4,1,2,3);
                $test2 = array(1,2,1);

                $expectedResult1 = array(4,3);
                $expectedResult2 = array();
                if (array_diff ($result( $test1, $test2 ), $expectedResult1) != array()) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [4,3] untuk data [4,1,2,3] dibandingkan dengan [1,2,1]. Hasil kamu adalah: ' . json_encode($result($test1, $test2)));
                }
                if (array_diff ($result( $test2, $test1 ), $expectedResult2) != array()) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [] untuk data [1,2,1] dibandingkan dengan [4,1,2,3]. Hasil kamu adalah: ' . json_encode($result($test2, $test1)));
                }
            },
            'spotTheSimilarity' => function() {
                $result = $this->spotTheSimilarity();
                $test1 = array(4,1,2,3);
                $test2 = array(-1,2,5);
                $test3 = array(1,4,5,9);

                $expectedResult1 = array(2);
                $expectedResult2 = array(1,4);

                $shortcutRes1 = $result( $test1, $test2 );
                $shortcutRes2 = $result( $test1, $test3 );

                if (sizeof($shortcutRes1) != sizeof($expectedResult1) || array_diff ($shortcutRes1, $expectedResult1) != array()) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [2] untuk data [4,1,2,3] dibandingkan dengan [-1,2,5]. Hasil kamu adalah: ' . json_encode($shortcutRes1));
                }
                if (sizeof($shortcutRes2) != sizeof($expectedResult2) || array_diff ($shortcutRes2, $expectedResult2) != array()) {
                    throw new \Exception('$returnFunction harusnya menghasilkan [] untuk data [4,1,2,3] dibandingkan dengan [1,4,5,9]. Hasil kamu adalah: ' . json_encode($shortcutRes2));
                }
            },
            'combineMe' => function() {
                $result = $this->combineMe();
                $test1 = array(4,1,2,3);
                $test2 = array(-1,2,5);
                $test3 = array(1,4,5,9);

                $expectedResult1 = array(4,1,2,3,-1,2,5);
                $expectedResult2 = array(1,4,5,9,4,1,2,3);

                if ($result( $test1, $test2 ) != $expectedResult1) {
                    throw new \Exception('$returnFunction harusnya menghasilkan '. json_encode($expectedResult1) .' untuk penggabungan data [4,1,2,3] dengan [-1,2,5]. Hasil kamu adalah: ' . json_encode($result( $test1, $test2 )));
                }
                if ($result( $test3, $test1 ) != $expectedResult2) {
                    throw new \Exception('$returnFunction harusnya menghasilkan '. json_encode($expectedResult2) .' untuk penggabungan data [1,4,5,9] dengan [4,1,2,3]. Hasil kamu adalah: ' . json_encode($result( $test3, $test1 )));
                }
            },
        ];
    }
}
