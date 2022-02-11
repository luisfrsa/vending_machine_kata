<?php

namespace Src;

use PHPUnit\Framework\TestCase;

class VendingMachineTest extends TestCase
{

    private VendingMachine $vending_machine;

    public function setup(): void
    {
    }

    public function test🙂()
    {
        $machine = $this->createMachine();
        $machine->execute();
        $display = $machine->display();
        $this->assertEquals('' ,$display);
    }

    private function createMachine(){
        return new VendingMachine();
    }

}