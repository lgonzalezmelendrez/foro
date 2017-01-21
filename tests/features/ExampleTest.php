<?php



class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
           'name'=>'Luis Gonzalez',
            'email'=>'lgonzalezmelendrez@gmail.com',
        ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Luis Gonzalez')
            ->see('lgonzalezmelendrez@gmail.com');
    }
}
