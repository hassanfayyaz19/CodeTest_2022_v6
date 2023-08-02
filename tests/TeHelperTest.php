<?php

class TeHelperTest extends TestCase
{
    public function testWillExpireAt()
    {
        $created_at = '2023-07-01 12:00:00';
        $due_time = '2023-07-02 10:00:00';

        $time_expect = Carbon::parse($due_time)->subHours(48)->format('Y-m-d H:i:s');
        $result = TeHelper::willExpireAt($due_time, $created_at);
        $this->assertEquals($time_expect, $result);
    }
}
