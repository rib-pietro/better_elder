<?php

use Illuminate\Database\Seeder;
use better_elder\Activity;
use better_elder\AvailableExam;
use better_elder\Specialist;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivityTableSeeder::class);
        $this->call(AvailableExamTableSeeder::class);
        $this->call(SpecialistTableSeeder::class);
    }
}

class ActivityTableSeeder extends Seeder
{
	public function run(){
		Activity::create([
			'activity_name' => 'Hidroginástica'
		]);
		Activity::create([
			'activity_name' => 'Caminhada'
		]);
		Activity::create([
			'activity_name' => 'Ginástica'
		]);
		Activity::create([
			'activity_name' => 'Aeróbica'
		]);
		Activity::create([
			'activity_name' => 'Violão'
		]);
		Activity::create([
			'activity_name' => 'Coral'
		]);
		Activity::create([
			'activity_name' => 'Artesanato'
		]);
		Activity::create([
			'activity_name' => 'Teatro'
		]);
		Activity::create([
			'activity_name' => 'Dança de Salão'
		]);
		Activity::create([
			'activity_name' => 'Animação Cultural'
		]);
		Activity::create([
			'activity_name' => 'Oficina da Memória'
		]);
		Activity::create([
			'activity_name' => 'Equilíbrio e Queda'
		]);
		Activity::create([
			'activity_name' => 'Inglês'
		]);
		Activity::create([
			'activity_name' => 'Informática'
		]);
		Activity::create([
			'activity_name' => 'Brasil Alfabetizado'
		]);
	}
}

class AvailableExamTableSeeder extends Seeder
{
	public function run(){
		AvailableExam::create([
			'exam_name' => 'Mutirão da Saúde'
		]);
		AvailableExam::create([
			'exam_name' => 'Pressão'
		]);
		AvailableExam::create([
			'exam_name' => 'Glicose'
		]);
		AvailableExam::create([
			'exam_name' => 'Receita Interna',
		]);
		AvailableExam::create([
			'exam_name' => 'Receita Externa',
		]);
		AvailableExam::create([
			'exam_name' => 'Uso contínuo',
		]);
		AvailableExam::create([
			'exam_name' => 'Medicamentos Controlados',
		]);
		AvailableExam::create([
			'exam_name' => 'Alergista',
		]);		
	}
}

class SpecialistTableSeeder extends Seeder
{
	public function run(){
		Specialist::create([
			'specialist_name' => 'Psicologia'
		]);
		Specialist::create([
			'specialist_name' => 'Fisioterapia'
		]);
		Specialist::create([
			'specialist_name' => 'Geriatria'
		]);
		Specialist::create([
			'specialist_name' => 'Cardiologia'
		]);
		Specialist::create([
			'specialist_name' => 'Ortopedista'
		]);
		Specialist::create([
			'specialist_name' => 'Dentista'
		]);
		Specialist::create([
			'specialist_name' => 'Angiologista'
		]);
		Specialist::create([
			'specialist_name' => 'Endocrinologista'
		]);
		Specialist::create([
			'specialist_name' => 'Nutricionista'
		]);
		Specialist::create([
			'specialist_name' => 'Dermatologista'
		]);
		Specialist::create([
			'specialist_name' => 'Ginecologista'
		]);
		Specialist::create([
			'specialist_name' => 'Neurologista'
		]);
		Specialist::create([
			'specialist_name' => 'Pneumologista'
		]);
		Specialist::create([
			'specialist_name' => 'Urologista'
		]);
		Specialist::create([
			'specialist_name' => 'Clínico Geral'
		]);
		Specialist::create([
			'specialist_name' => 'Assistente Social'
		]);
	}
}