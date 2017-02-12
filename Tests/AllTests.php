<?php
namespace PHPKoans\Tests;

/**
 * Implementing and tracking all chapters we're testing on
 */
class AllTests
{

    /**
     * @var array Instances of classes that we're testing
     */
    private $classesToTest;

    /**
     * @var integer Number of tests total in our class we're testing
     */
    private $exercisesTotal;

    /**
     * @var integer Number of tests completed in our class we're testing
     */
    private $exercisesCompleted;

    /**
     * Default constructor defining array of chapters to test
     */
    public function __construct()
    {
        $this->classesToTest = [
            new \PHPKoans\Chapters\ChapterArrayBasic(),
            new \PHPKoans\Chapters\ChapterArrayFunction1(),
            new \PHPKoans\Chapters\ChapterArrayFunction2(),
            new \PHPKoans\Chapters\ChapterArrayFunction3(),
        ];
    }

    /**
     * Run tests in all of our chapters
     */
    public function testChapters()
    {
        $incomplete = false;
        // Test our chapters and keep track of where we are
        foreach ($this->classesToTest as $class) {
            $chapter = new \PHPKoans\Tests\KoansTest($class);
            $this->exercisesTotal += $chapter->exercisesTotal;

            if (!$incomplete) {
                try {
                    $chapter->testExercises();
                } catch (\Exception $e) {
                    $incomplete = true;
                }
                $this->exercisesCompleted += $chapter->exercisesCompleted;
            }
        }
    }

    /**
     * Calculate percentage of all exercises that are complete
     */
    private function percentComplete()
    {
        return round(($this->exercisesCompleted / $this->exercisesTotal) * 100);
    }

    /**
     * Terminal output to start
     */
    public function outputHeader()
    {
        echo "<br/>";
        echo "PHP Koans";
        echo "<br/>";
    }

    /**
     * Terminal Output to end
     */
    public function outputFooter()
    {
        $percentComplete = $this->percentComplete();

        if ($percentComplete < 100) {
            echo 'Progress PHP Koans'.$percentComplete.'% Complete. Semangat!';
        } else {
            echo "ALL DONE";
        }
        echo "<br/>";
    }
}
