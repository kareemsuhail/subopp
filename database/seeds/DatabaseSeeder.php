<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(BidSeed::class);
        $this->call(BidTypeSeed::class);
        $this->call(CitySeed::class);
        $this->call(CountrySeed::class);
        $this->call(GenderSeed::class);
        $this->call(JobSeed::class);
        $this->call(JobStatusSeed::class);
        $this->call(LanguageSeed::class);
        $this->call(PeopleSaySeed::class);
        $this->call(RecruitSeed::class);
        $this->call(RoleSeed::class);
        $this->call(SiteSettingSeed::class);
        $this->call(SkillSeed::class);
        $this->call(SliderSeed::class);
        $this->call(SpicalSeed::class);
        $this->call(StatusSeed::class);
        $this->call(TeamMemberSeed::class);
        $this->call(TeamSeed::class);
        $this->call(TypeSeed::class);
        $this->call(UserSeed::class);
        $this->call(UsersProfileSeed::class);

    }
}
