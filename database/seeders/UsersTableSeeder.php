<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $country = OauthCountry::whereTwoLetterCode('sk')->first();
        $usersArr = [
            Game::WINTER_SPORTS_MANIA_TOKEN => [
                [
                    'uuid' => OauthUserGame::WSM_PPS_MS_UUID,
                    'email' => 'finance@powerplaymanager.com',
                    'username' => 'PPS Payment MS',
                    'password' => env('PPS_PAYMENT_USER_PASSWORD'),
                ],
                [
                    'uuid' => OauthUserGame::WSM_PPS_ET_UUID,
                    'email' => 'event.tool@powerplaymanager.com',
                    'username' => 'PPS ET',
                    'password' => env('PPS_ET_WSM_USER_PASSWORD'),
                    'role' => OauthUserRole::SUPER_ADMIN_ROLE,
                ],
            ],
        ];

        foreach ($usersArr as $gameToken => $users) {
            $game = Game::whereToken($gameToken)->first();
            foreach ($users as $user) {
                $userModel = User::query()->firstOrNew([
                    'email' => $user['email'],
                ]);
                $userModel->password = Hash::make($user['password']);
                $userModel->email = $user['email'];
                $userModel->user_roles_id = $user['role'] ?? null;
                $userModel->save();
                $oauthUserGame = OauthUserGame::firstOrCreate([
                    'user_id' => $userModel->id,
                    'username' => $user['username'],
                    'game_id' => $game->id,
                    'oauth_countries_id' => $country->id,
                ]);

                if ($oauthUserGame->id !== $user['uuid']) {
                    $oauthUserGame->update(['id' => $user['uuid']]);
                }
            }
        }
    }
}
