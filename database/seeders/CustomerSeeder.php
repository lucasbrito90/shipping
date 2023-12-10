<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Company;
use App\Models\Contact;
use App\Models\CrumbsTrail;
use App\Models\CrumbTrailStatus;
use App\Models\Customer;
use App\Models\Language;
use App\Models\Piece;
use App\Models\Product;
use App\Models\Project;
use App\Models\Sector;
use App\Models\SocialMedia;
use App\Models\Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory(10)
            ->has(
                Company::factory()
                    ->has(
                        Contact::factory()
                            ->has(SocialMedia::factory()->count(3), 'socialMedias')->count(3)
                            ->has(Language::factory()->count(3), 'languages')
                        , 'contacts')
                    ->has(Address::factory()->count(1), 'address')
                    ->has(
                        Project::factory()
                            ->has(
                                Product::factory()
                                    ->has(
                                        Piece::factory()
                                        ->has(Stage::factory()->count(3), 'stages')
                                        ,'pieces')
                                    ->has(
                                        CrumbsTrail::factory()
                                            ->has(Sector::factory()->count(3), 'sector')
                                            ->has(CrumbTrailStatus::factory()->count(1), 'crumbsTrailStatus')
                                            ->count(3)
                                        , 'crumbsTrails')
                                    ->count(3), 'products')
                            ->count(3), 'projects'
                    )->count(3), 'companies')
            ->create();
    }
}
