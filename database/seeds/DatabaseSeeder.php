<?php
use app\User;
use app\Tempatmakan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeds finished.');

        Model::reguard();
    }
}
class UserTableSeeder extends Seeder 
{
    public function run(){
        //clear database
        DB::table('user')->delete();
        DB::table('tempatmakan')->delete();

        //seeding database
        $userOne = DB::table('user')->insert([
            'uname'     => 'admin',
            'name'      => 'Dayan Ramly Ramadhan',
            'password'  => bcrypt('admin'),
            'group_id'  => 1
            ]);        
        $userTwo = DB::table('user')->insert([
            'uname'     => 'user',
            'name'      => 'Galih Dwi Jatmiko',
            'password'  => bcrypt('user'),
            'group_id'  => 2
            ]);
        // $userOne = User::create(array(
        //     'uname'     => 'admin',
        //     'name'      => 'Dayan Ramly Ramadhan',
        //     'password'  => bcrypt('admin'),
        //     'group_id'  => 1
        //     ));
        // $userTwo = User::create(array(
        //     'uname'     => 'user',
        //     'name'      => 'Galih Dwi Jatmiko',
        //     'password'  => bcrypt('user'),
        //     'group_id'  => 2
        //     ));

        $this->command->info('User seeding complete');
        // DB::table('tempatmakan')->insert([
        //     'nama'          => 'Flamboyan',
        //     'deskripsi'     => 'Nasi Goreng terenak di Purbalingga',
        //     'keunggulan'    => '["Nasi goreng enak","Tempat makan murah"]',
        //     'menu'          => '{"makanan":{"nama":"Nasi Goreng","harga":"10000"},"minuman":{"nama":"es jeruk","harga":"4000"}}',
        //     'foto'          => '/img/flamboyan.jpg',
        //     'alamat'        => 'Jalan Jend. Sudirman No.13',
        //     'user_id'       => $userTwo->id
        //     ]);
        // Tempatmakan::create(array(
        //     'nama'          => 'Flamboyan',
        //     'deskripsi'     => 'Nasi Goreng terenak di Purbalingga',
        //     'keunggulan'    => '["Nasi goreng enak","Tempat makan murah"]',
        //     'menu'          => '{"makanan":{"nama":"Nasi Goreng","harga":"10000"},"minuman":{"nama":"es jeruk","harga":"4000"}}',
        //     'foto'          => '/img/flamboyan.jpg',
        //     'alamat'        => 'Jalan Jend. Sudirman No.13',
        //     'user_id'       => $userTwo->id
        //     ));

        // $this->command->info('Tempat makan seeding complete');
    }
}