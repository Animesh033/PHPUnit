<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue;

        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testNewQueueIsEmpty
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue) // This method as called as producers
    {
        $queue->push('green');

        $this->assertEquals(1, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testAnItemIsAddedToTheQueue
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue) // This method as called as consumers i.e consumes same $queue as it is retuned from producers
    {
        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());

        $this->assertEquals('green', $item);
    }
}
