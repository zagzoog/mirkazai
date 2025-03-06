<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('plans')->insert([
            'name' => 'Free Plan',
            'active' => true,
            'price' => 0,
            'currency' => 'USD',
            'frequency' => 'monthly',
            'is_featured' => false,
            'is_free' => true,
            'plan_type' => 'free',
            'type' => 'subscription',
            'can_create_ai_images' => true,
            'ai_name' => 'AI',
            'max_tokens' => 4000,
            'features' => json_encode([
                'Monthly words limit' => '100,000',
                'Monthly images limit' => '100',
                'Support' => true
            ]),
            'plan_ai_tools' => json_encode([]),
            'plan_features' => json_encode([]),
            'open_ai_items' => json_encode([]),
            'ai_models' => json_encode([
                'openai' => [
                    'gpt-3.5-turbo' => [
                        'credit' => 100,
                        'isUnlimited' => false
                    ],
                    'gpt-4' => [
                        'credit' => 0,
                        'isUnlimited' => false
                    ]
                ]
            ]),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function down(): void
    {
        DB::table('plans')->where('name', 'Free Plan')->delete();
    }
}; 