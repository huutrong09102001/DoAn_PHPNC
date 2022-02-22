<?php 
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Carbon\Carbons;
use DB;
class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' =>'Admin',
            'email' => 'admin@gmail.com',
            'password' =>bcrypt('123456'),        
        ];
        DB::table('users') ->insert($data);
    }
}
?>