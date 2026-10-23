```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Informasi produk
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            // Harga produk
            $table->decimal('price', 12, 2);

            // Kategori dan warna
            $table->string('category')->nullable();
            $table->string('color')->nullable();

            // Foto produk
            $table->string('image')->nullable();

            // Stok dan status produk
            $table->unsignedInteger('stock')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
