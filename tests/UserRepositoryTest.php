<?php

class UserRepositoryTest extends TestCase
{
    public function testCreateUser()
    {
        $request = [
            'role' => env('CUSTOMER_ROLE_ID'),
            'name' => 'Customer Name',
            'email' => "demotest@test.com",
            'dob_or_orgid' => "2022-12-1",
            'phone' => "12345678",
            'mobile' => "12345678",
            'password' => "password",
            'consumer_type' => 'Test',
            'customer_type' => 'Test',
            'username' => 'Test',
            'post_code' => 'Test',
            'address' => 'Test',
            'city' => 'Test',
            'town' => 'Test',
            'country' => 'Test',
            'reference' => 'Test',
            'additional_info' => 'Test',
            'cost_place' => 'Test',
            'fee' => 'Test',
            'time_to_charge' => 'Test',
            'time_to_pay' => 'Test',
            'charge_ob' => 'Test',
            'customer_id' => 'Test',
            'charge_km' => 'Test',
            'maximum_km' => 'Test',
        ];

        $user = (new UserControler())->createOrUpdate(null, $request);

        $this->assertEquals($request['role'], $user->user_type);
        $this->assertEquals($request['name'], $user->name);
        $this->assertEquals($request['gender'], $user->userMeta->gender);
    }
    public function testUpdateUser()
    {
        $existing_user = factory(User::class)->create();
        $request = [
            'name' => 'Customer Name Test',
            'mobile' => "12345678",
        ];

        $user = (new UserControler())->createOrUpdate($existing_user->id, $request);

        $this->assertEquals($request['name'], $user->name);
        $this->assertEquals($request['mobile'], $user->mobile);
    }

}
