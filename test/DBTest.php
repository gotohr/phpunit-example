<?php

use Marketing\Ads\B2B\Importing\Importer;

require ('../vendor/autoload.php');

class DBTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function connectToDB() {

        $importer = new Importer();
        $stmt= $importer->getConn()->executeQuery("SELECT * FROM ad");

        $result = $stmt->fetchAll();
        $this->assertTrue(count($result) > 2, 'Wrong ads set?');
//        var_dump($result);
    }

    public function testQueryBuilder() {
        $importer = new Importer();
        $qb = $importer->getConn()->createQueryBuilder();
        $basicQuery = $qb
            ->select('*')
            ->from('ad');
        $basicQuery
            ->where(
                $qb->expr()->eq('id', 1),
                $qb->expr()->lte('id', 2)
            );

        $result = $basicQuery->execute()->fetchAll();
        var_dump($result);
    }

    public function testDeleteStuff() {
        $imp = new Importer();
        $imp->getConn()->beginTransaction();
        $imp->getConn()->delete('ad', ['id' => 2]);
        $imp->getConn()->rollBack();

        $stmt = $imp->getConn()->executeQuery("SELECT * FROM ad");
        $result = $stmt->fetchAll();

        $this->assertTrue(count($result) == 1, 'Deleted!');
    }
}
