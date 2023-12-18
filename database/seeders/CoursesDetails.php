<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CoursesDetails;
class CoursesDetails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CoursesDetails::create(
            [
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'course_id' => 'Cyclone Biparjoy moved after Gujarat. Vigilance warning to 4 states',
                'course_type' => 'बिपरजॉय चक्रीवादळ गुजरातनंतर सरकले. 4 राज्यांना सतर्कतेचा इशारा',
                'course_duration' => 'Cyclone Biparjoy moved after Gujarat. Vigilance warning to 4 states',
                'admission_procedure' => 'बिपरजॉय चक्रीवादळ गुजरातनंतर सरकले. 4 राज्यांना सतर्कतेचा इशारा ',
                'eligibility' => 'बिपरजॉय चक्रीवादळ गुजरातनंतर सरकले. 4 राज्यांना सतर्कतेचा इशारा ',
                'preparation' => 'बिपरजॉय चक्रीवादळ गुजरातनंतर सरकले. 4 राज्यांना सतर्कतेचा इशारा ',
                'is_deleted' => false,
                'is_active' => true,
            ]);
    }
}
