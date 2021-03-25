<?php

namespace App\Helpers;

use Carbon\Carbon;
use App\Models\User;

class CorpsSeeder
{
    public static function corps()
    {
        $corps = [
            [
                'name' => 'corper1',
                'email'    => 'corp@nysc.com',
                'password' => bcrypt('corp2021#'),
            ],
        ];

        // Seed Users (corp) table into the DB
        foreach ($corps as $corp) {
            $newUser = User::where('name', '=', $corp['name'])->first();
            if ($newUser === null) {
                User::create([
                    'name' => $corp['name'],
                    'email' => $corp['email'],
                    'password' => $corp['password'],
                ]);
            }
        }
    }
}
