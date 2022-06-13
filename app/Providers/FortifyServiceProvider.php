<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        //register
        Fortify::registerView(function () {
            return view('auth.register');
        });

        //login
        //Dan untuk proses login, kita menggunakan nama file login.blade.php di dalam folder auth. Kurang lebih seperti ini :
        Fortify::loginView(function () {
            return view('auth.login');
        });

        //forgot
        //Kemudian untuk view yang akan kita gunakan untuk mengirim link reset password yaitu forgot-password.blade.php yang berada di dalam folder auth. Kurang lebih seperti berikut ini :
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        //reset
        //Setelah link berhasil dikirim melalui email, maka kita akan melakukan update password. Dan untuk view yang akan kita gunakan yaitu reset-password.blade.php
        // yang nanti akan dibuat di dalam folder auth. Kurang lebih seperti ini :
        Fortify::resetPasswordView(function ($request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        //verify account
        Fortify::verifyEmailView(function () {
            return view('auth.verify');
        });
    }
}
