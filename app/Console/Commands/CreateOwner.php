<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateOwner extends Command
{
    protected $signature = 'admin:create-owner';

    protected $description = 'Create or update the SPTRDITZ owner account';

    public function handle(): int
    {
        $email = strtolower(trim((string) config('admin.email', '')));

        if ($email === '') {
            $this->error('ADMIN_EMAIL belum diatur di file .env.');
            return self::FAILURE;
        }

        $this->info('Membuat akun owner untuk: '.$email);

        $name = trim((string) $this->ask('Nama owner', 'SPTRDITZ Owner'));

        if ($name === '') {
            $this->error('Nama owner tidak boleh kosong.');
            return self::FAILURE;
        }

        $password = $this->secret('Buat password owner (minimal 12 karakter)');
        $confirmation = $this->secret('Masukkan ulang password owner');

        if (! is_string($password) || strlen($password) < 12) {
            $this->error('Password harus minimal 12 karakter.');
            return self::FAILURE;
        }

        if (! is_string($confirmation) || ! hash_equals($password, $confirmation)) {
            $this->error('Konfirmasi password tidak cocok.');
            return self::FAILURE;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
            ]
        );

        $this->newLine();
        $this->info('Akun owner berhasil dibuat atau diperbarui.');
        $this->line('Email: '.$email);
        $this->info('Password tidak ditampilkan.');

        return self::SUCCESS;
    }
}
