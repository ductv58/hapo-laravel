<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateStudentTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    

    public function testIndex()
    {
    	$this->withoutMiddleware();
    	$response = $this->get(route('admin.index'));
    	$response->assertStatus(500);
    }

    public function testCreate ()
    {
        $this->withoutMiddleware();
        $data = [
            'name' => 'mavuong',
            'student_code' => '20131073',
            'password' => bcrypt('20131073'),
            'school_year' => '58',
            'birthday' => '2017-12-02',
            'email' => 'mavuong20131073@gmail.com',
            'email_token' => str_random(15),
            'phone' => '11111111',
            'address' => 'aaaaaaaa',
            'activate' => '0',
            'gender' => '1',
        ];
        $this->post(route('students.store'),$data);
        $this->assertDatabaseHas('students',[
            'name' => 'mavuong',
            'student_code' => '20131073',
            'school_year' => '58',
            'birthday' => '2017-12-02',
            'phone' => '11111111',
            'address' => 'aaaaaaaa',
            'gender' => '1',
        ]);
        $response = $this->get(route('students.index'));
        $response->assertStatus(200);
    }
}
