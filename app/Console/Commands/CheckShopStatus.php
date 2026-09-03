<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

// #[Signature('app:check-shop-status')]
// #[Description('Command description')]
class CheckShopStatus extends Command
{
    /**
     * Execute the console command.
     */
    protected $signature = 'pos:status {jam?}';
    protected $description = 'Mengecek status operasional Toko Kelontong POS';
    public function handle()
    {
        // Mengambil argumen jam, jika tidak diisi maka default ke jam 10 pagi
        $nama= $this->ask('Masukkan nama anda: ');
        $jam = $this->argument('jam') ?? 10;
        $this->info("=== SISTEM MONITORING TOKO KELONTONG ===");
        // Asumsi toko buka dari jam 08:00 sampai 21:00
        if ($jam >= 8 && $jam <= 21) {
            $this->info("Halo $nama! Status Toko pada jam $jam:00 WIB adalah: BUKA");
            $this->comment("Silakan bersiap di meja transaksi.");
        } else {
            $this->error("Halo $nama! Status Toko pada jam $jam:00 WIB adalah: TUTUP");
            $this->warn("Akses transaksi kasir dinonaktifkan sementara.");
        }
    }
}
