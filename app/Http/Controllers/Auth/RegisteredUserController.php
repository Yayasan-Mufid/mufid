<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Rules\PhoneNumber;
use ProtoneMedia\Splade\Facades\Toast;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone_number' => ['required', 'min:8', 'max:15', new PhoneNumber, 'unique:'.User::class],
            'phone_code'   => ['max:6'],
        ], [
            'name.required' => 'Nama wajib diisi!',
            'name.string' => 'Nama harus berupa tulisan!',
            'name.max' => 'Nama maksimal 150 karakter!',
            'email.required' => 'Email wajib diisi!',
            'email.string' => 'Email harus sesuai format!',
            'email.email' => 'Email harus berupa email yang valid!',
            'email.max' => 'Email maksimal 150 karakter!',
            'email.unique' => 'Email sudah digunakan!',
            'password.required' => 'Kata sandi wajib diisi!',
            'password.confirmed' => 'Kata sandi tidak sesuai!',
            'password.min' => 'Kata sandi minimal 8 karakter!',
            'phone_number.required' => 'Nomor handphone wajib diisi!',
            'phone_number.min' => 'Nomor handphone minimal 8 karakter!',
            'phone_number.max' => 'Nomor handphone maksimal 15 karakter!',
            'phone_number.unique' => 'Nomor handphone sudah digunakan!',
            'phone_code.max' => 'Kode telepon maksimal 6 karakter!',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone_number' => $request->phone_number,
                'phone_code' => $request->phone_code ?? '62',
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() === '23000') {
                if (str_contains($e->getMessage(), 'users_email_unique')) {
                    Toast::warning('Email sudah terdaftar!');
                } else {
                    Toast::warning('Nomor telepon sudah terdaftar!');
                }
                return back()->withInput();
            }
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect('/dashboard');
    }
}
