<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

/**
 * Creates an admin user (or promotes an existing user to admin).
 *
 *   php artisan admin:create
 *
 * Runs only from the command line, so no admin password lives in code or seeders.
 */
class CreateAdmin extends Command
{
    protected $signature = 'admin:create';

    protected $description = 'Create an admin user who can log in at /admin/login';

    public function handle(): int
    {
        $name     = $this->ask('Name');
        $email    = $this->ask('Email');
        $password = $this->secret('Password (min 10 characters)');
        $confirm  = $this->secret('Confirm password');

        $validator = Validator::make(
            ['name' => $name, 'email' => $email, 'password' => $password, 'password_confirmation' => $confirm],
            [
                'name'     => ['required', 'string', 'max:255'],
                'email'    => ['required', 'email', 'max:255'],
                'password' => ['required', 'confirmed', Password::min(10)->letters()->numbers()],
            ]
        );

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return self::FAILURE;
        }

        $user = User::where('email', $email)->first();

        if ($user && ! $this->confirm("A user with {$email} already exists. Update their password and make them admin?")) {
            return self::FAILURE;
        }

        $user ??= new User();
        $user->name     = $name;
        $user->email    = $email;
        $user->password = $password; // hashed by the model's 'hashed' cast
        $user->is_admin = true;
        $user->save();

        $this->info("Admin {$email} is ready. Log in at " . url('/admin/login'));

        return self::SUCCESS;
    }
}
