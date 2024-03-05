<?php

require_once __DIR__ . '/../revertText.php';
 
class RevertTextTest extends \PHPUnit\Framework\TestCase {
 
    public function test_response() {
        $revertTest = new RevertText();
        $this->assertSame('.ьсиледив ен онваД !тевирП', $revertTest->makeRevert('Привет! Давно не виделись.'));
        $this->assertSame('Передана пустая строка', $revertTest->makeRevert(''));
    }
 
}