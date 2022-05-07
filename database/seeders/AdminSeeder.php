<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * @var array[]
     */
    protected $admins = [
            'email' => "admin@admin.com",
            'name' => 'Admin',
            'password' => '12345678',
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::firstOrCreate(
            [
                'email' => $this->admins['email'],
            ],
            [
                'fullname' => $this->admins['name'],
                'email' => $this->admins['email'],
                'password' => Hash::make($this->admins['password']),
                'role_id' => 1,
            ]
        );
    }
}
