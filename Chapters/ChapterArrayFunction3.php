<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 *
 */
class ChapterArrayFunction3 extends Chapter
{

    /**
     * Exercise 4.1
     *
     * Instruksi
     * Hitunglah jumlah kemunculan nilai tertentu
     * dalam sebuah array
     * format method: method($inputArray1)
     */
    public function howOftenYouSeeMe()
    {
        // CODE HERE
        $returnFunction = function(){};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }

    /**
     * Exercise 4.2
     *
     * Instruksi
     * Aplikasikan sebuah fungsi ke dalam
     * masing-masing anggota array
     * format method: method(string $namaMethod, $inputArray1)
     */
    public function applyAllTheWay()
    {
        // CODE HERE
        $returnFunction = function(){};

        // DO NOT EDIT BELOW
        return $returnFunction;
    }



    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 4;
        $this->name = 'Function array';

        $this->exerciseTests = [
            'howOftenYouSeeMe' => function () {
                $result = $this->howOftenYouSeeMe();
                $test1 = array(4,1,2,3);
                if ($result( $test1 ) != array(
                    1 => 1,
                    2 => 1,
                    3 => 1,
                    4 => 1
                )) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (1 => 1, 2 => 1, 3 => 1, 4 => 1) untuk data [4,1,2,3]. Hasil kamu adalah: ' . json_encode($result($test1)));
                }
                $test2 = array(1,2,1);
                if ($result( $test2 ) != array(
                    1 => 2,
                    2 => 1
                )) {
                    throw new \Exception('$returnFunction harusnya menghasilkan (1 => 2, 2 => 1) untuk data [1,2,1]. Hasil kamu adalah: ' . json_encode($result($test2)));
                }
            },
            'applyAllTheWay' => function () {
                $result = $this->applyAllTheWay();
                $test1 = array("buku", "ini", "kusam");
                if ($result( 'strtoupper', $test1 ) != array(
                    "BUKU",
                    "INI",
                    "KUSAM",
                )) {
                    throw new \Exception('$returnFunction harusnya menghasilkan ("BUKU", "INI", KUSAM") untuk data ["buku", "ini", "kusam"] setelah diaplikasikan method strtoupper. Hasil kamu adalah: ' . json_encode($result('strtoupper', $test1)));
                }
                $test2 = array("jaret", "hanyut", "di", "sungai");
                if ($result( 'ucfirst', $test2 ) != array("Jaret", "Hanyut", "Di", "Sungai"))
                {
                throw new \Exception('$returnFunction harusnya menghasilkan ("Jaret", "Hanyut", "Di", "Sungai") untuk data ["jaret", "hanyut", "di", "sungai"] setelah diaplikasikan method ucfirst. Hasil kamu adalah: ' . json_encode($result('ucfirst', $test2)));
                }
            },
        ];
    }
}
