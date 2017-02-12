<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 *
 */
class ChapterArrayFunction1 extends Chapter
{

    /**
     * Exercise 2.1
     *
     * Instruksi
     * Masukkan sebuah nilai ke dalam array
     * posisi nilai tersebut ada pada akhir array
     * format method: method(&$arraySumber, $nilaiInput)
     */
    public function appendMePls()
    {
        // CODE HERE
        $returnFunction = function(&$arraySumber, $nilaiInput){
            return $arraySumber[] = $nilaiInput;
        };

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 2.2
     *
     * Instruksi
     * Ambil nilai array yang paling terakhir
     * format method: method(&$arraySumber)
     */
    public function getMyLast()
    {
        // CODE HERE
        $returnFunction = function(){};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 2.3
     *
     * Instruksi
     * Masukkan sebuah nilai ke dalam array
     * posisi nilai tersebut ada pada awal array
     * format method: method(&$arraySumber, $nilaiInput)
     */
    public function prependMe()
    {
        // CODE HERE
        $returnFunction = function(){};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 2.4
     *
     * Instruksi
     * Ambil nilai array yang paling pertama
     * format method: method(&$arraySumber)
     */
    public function getMyFirst()
    {
        // CODE HERE
        $returnFunction = function(){};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }



    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 2;
        $this->name = 'Function array';

        $this->exerciseTests = [
            'appendMePls' => function () {
                $result = $this->appendMePls();
                $test1 = array(4,1,2,3);
                $copyTest1 = array(4,1,2,3);
                $result($test1, 5);
                if ($test1 != array(4,1,2,3,5)) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (4,1,2,3,5). Hasil kamu adalah: ' . json_encode($result($copyTest1, 5)));
                }
                $test2 = array(1,2,1);
                $copyTest2 = array(1,2,1);
                $result($test2, 9);
                if ($test2 != array(1,2,1,9)) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (1,2,1,9). Hasil kamu adalah: ' . json_encode($result($copyTest2, 9)));
                }
            },
            'getMyLast' => function () {
                $result = $this->getMyLast();
                $test1 = array(4,1,2,3);
                $copyTest1 = array(4,1,2,3);
                ;
                if ($result($test1) != 3) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 3 saat mengambil nilai terakhir (4,1,2,3). Hasil kamu adalah: ' . json_encode($result($copyTest1)));
                }
                $testr2 = array(1,2,1);
                $copyTest2 = array(1,2,1);
                ;
                if ($result($test2) != 1) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 1 saat mengambil nilai terakhir (1,2,1). Hasil kamu adalah: ' . json_encode($result($copyTest2)));
                }
            },
            'prependMe' => function () {
                $result = $this->prependMe();
                $test1 = array(4,1,2,3);
                $copyTest1 = array(4,1,2,3);
                $result($test1, 5);
                if ($test1 != array(5,4,1,2,3)) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (5,4,1,2,3). Hasil kamu adalah: ' . json_encode($result($copyTest1, 5)));
                }
                $test2 = array(1,2,1);
                $copyTest2 = array(1,2,1);
                $result($test2, 9);
                if ($test2 != array(9,1,2,1)) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (9,1,2,1). Hasil kamu adalah: ' . json_encode($result($copyTest2, 9)));
                }
            },
            'getMyFirst' => function () {
                $result = $this->getMyFirst();
                $test1 = array(4,1,2,3);
                $copyTest1 = array(4,1,2,3);
                ;
                if ($result($test1) != 4) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 4 saat mengambil nilai pertama (4,1,2,3). Hasil kamu adalah: ' . json_encode($result($copyTest1)));
                }
                $testr2 = array(1,2,1);
                $copyTest2 = array(1,2,1);
                ;
                if ($result($test2) != 1) {
                    throw new \Exception('$returnFunction harusnya menghasilkan 1 saat mengambil nilai pertama (1,2,1). Hasil kamu adalah: ' . json_encode($result($copyTest2)));
                }
            },
        ];
    }
}
