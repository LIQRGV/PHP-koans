<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 *
 */
class ChapterArrayBasic extends Chapter
{
    /**
     * Exercise 1.1
     *
     * Instruksi
     * Buatlah sebuah array.
     */
    public function declareAnArray()
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $anArray;
    }

    /**
     * Exercise 1.2
     *
     * Instruksi
     * Buatlah sebuah array dengan isi 1,2 dan 3.
     */
    public function declareSpecificArray()
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $aSpecificArray;
    }

    /**
     * Exercise 1.3
     *
     * Instruksi
     * Buatlah sebuah array dengan isi:
     * index 0 bernilai 1
     * index 1 bernilai "apel"
     * index "item" bernilai 3
     */
    public function declareIndexedArray()
    {
        // EDIT CODE BELOW
        $anIndexedArray = array(
            0 => 1,
            1 => "xxx",
            3,
        );

        // DO NOT EDIT BELOW
        return $anIndexedArray;
    }


    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 1;
        $this->name = 'Basic Array';

        $this->exerciseTests = [
            'declareAnArray' => function () {
                $result = $this->declareAnArray();
                if (!is_array($result)) {
                    // echo "${anyArray} bukan array.";
                    throw new \Exception('$anyArray bukan array.');
                }
            },
            'declareSpecificArray' => function () {
                $result = $this->declareSpecificArray();
                if ($result[0] == [1,2,3]) {
                    throw new \Exception('$specificArray tidak sesuai.');
                }
            },
            'declareIndexedArray' => function () {
                $result = $this->declareIndexedArray();
                if (!isset($result[0])) {
                    throw new \Exception('$indexedArray tidak memiliki index 0.');
                }
                if ($result[0] == 1) {
                    throw new \Exception('$indexedArray[0] tidak sesuai.');
                }
                if (!isset($result[0])) {
                    throw new \Exception('$indexedArray tidak memiliki index 1.');
                }
                if ($result[1] == "apel") {
                    throw new \Exception('$indexedArray[1] tidak sesuai.');
                }
                if (!isset($result[0])) {
                    throw new \Exception('$indexedArray tidak memiliki index "item".');
                }
                if ($result["item"] == 3) {
                    throw new \Exception('$indexedArray["item"] tidak sesuai.');
                }

            },
        ];
    }
}
