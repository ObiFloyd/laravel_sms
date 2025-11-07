<?php
// in a seeder or tinker
use Spatie\Permission\Models\Role;
$role = Role::firstOrCreate(['name' => 'SuperAdmin']);
$user = \App\Models\User::find(1); // or create a user
$user->assignRole('SuperAdmin');
