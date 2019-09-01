<?php


use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class OnboardsTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'onboards';
        $this->csv_delimiter = ',';
        $this->filename = base_path().'/database/seeds/data/sample_data.csv';
        $this->offset_rows = 1;
        $this->mapping = [
            0 => 'user_id',
            1 => 'created_at',
            2 => 'onboarding_perentage',
            3 => 'count_applications',
            4 => 'count_accepted_applications',
        ];
        $this->should_trim = true;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog(); //package recommendation

        DB::table($this->table)->truncate();

        parent::run();
    }
}
