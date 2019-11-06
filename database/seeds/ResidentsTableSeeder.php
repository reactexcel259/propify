<?php

use App\Models\Role;
use App\Models\Resident;
use App\Models\Unit;
use App\Models\User;
use App\Models\UserSettings;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ResidentsTableSeeder extends Seeder
{
    use \Traits\TimeTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!App::environment('local')) {
            return;
        }

        $totalResidents = 200;
        $faker = Faker::create();
        $units = Unit::inRandomOrder()->with('building')->limit($totalResidents)->get();

        for($i = 0; $i < $totalResidents; $i++) {

            $email = $faker->safeEmail;
            if ($i == 0) {
                $email = 'resident@example.com';
            }

            $data = factory(App\Models\Resident::class)->make()->toArray();
            unset($data['created_by']);
            $date = $this->getRandomTime();

            if ($email == 'resident@example.com' || rand(0, 1)) {
                $unit = $units->random();
                $data['status'] = Resident::StatusActive;
                $date = $this->getRandomTime($unit->created_at);

                if ($email == 'resident@example.com') {
//                    $services = ServiceProvider::select('id')->limit(4)->inRandomOrder()->get();
//                    $building->serviceProviders()->attach($services);
                }
            }

            $userData = [
                'name' =>  sprintf('%s %s', $data['first_name'], $data['last_name']),
                'password' => bcrypt($email),
                'email' => $email,
                'phone' => $data['mobile_phone'],
            ];
            $userData = array_merge($userData, $this->getDateColumns($date));

            $residentRole = Role::where('name', 'resident')->first();
            $user = factory(User::class)->create($userData);
            $user->attachRole($residentRole);
            $settings = $this->getSettings();
            $user->settings()->save($settings->replicate());


            $data['user_id'] = $user->id;
            $data['title'] = $user->title;

            $data = array_merge($data, $this->getDateColumns($date));
            $resident = factory(App\Models\Resident::class)->create($data);
            $this->saveContracts($resident);
            $resident->setCredentialsPDF();
        }
    }

    protected function saveContracts($resident)
    {
        $data['resident_id'] = $resident->id;
        $data['status'] = \App\Models\Contract::StatusActive;

        $contract = factory(App\Models\Contract::class)->create($data);
        $resident->default_contract_id = $contract->id;
        $resident->save();
    }


    private function getSettings()
    {
        $languages = config('app.locales');

        $settings = new UserSettings();
        $settings->language = array_rand($languages);
        $settings->summary = 'daily';
        $settings->admin_notification = 1;
        $settings->pinboard_notification = 1;
        $settings->listing_notification = 1;
        $settings->service_notification = 1;

        return $settings;
    }
}
