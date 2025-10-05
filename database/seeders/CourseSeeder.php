<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'CourseId' => 'COMP6360004',
                'CourseName' => 'Algorithm and Programming',
                'CourseCategory' => 'LAB',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6360004',
                'CourseName' => 'Algorithm and Programming',
                'CourseCategory' => 'LEC',
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6764004',
                'CourseName' => 'Basic Statistics',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MATH6119004',
                'CourseName' => 'Linear Algebra',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MATH6118004',
                'CourseName' => 'Discrete Mathematics',
                'CourseCategory' => 'LEC',
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6840004',
                'CourseName' => 'Program Design Methods',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'CHAR6030004',
                'CourseName' => 'Character Building: Pancasila',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'LANG6117004',
                'CourseName' => 'INDONESIAN',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6362004',
                'CourseName' => 'Data Structure',
                'CourseCategory' => 'LAB',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6851004',
                'CourseName' => 'Human and Computer Interaction',
                'CourseCategory' => 'LAB',
                'Credit' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MATH6193004',
                'CourseName' => 'Scientific Computing',
                'CourseCategory' => 'LAB',
                'Credit' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MATH6120004',
                'CourseName' => 'Calculus',
                'CourseCategory' => 'LEC',
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'CHAR6031004',
                'CourseName' => 'Character Building: Kewarganegaraan',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6362004',
                'CourseName' => 'Data Structure',
                'CourseCategory' => 'LEC',
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'ENTR6519002',
                'CourseName' => 'Entrepreneurship: Ideation',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6851004',
                'CourseName' => 'Human and Computer Interaction',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MATH6193004',
                'CourseName' => 'Scientific Computing',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'SCIE6067004',
                'CourseName' => 'Computational Physics',
                'CourseCategory' => 'LAB',
                'Credit' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'CPEN6250004',
                'CourseName' => 'Computer Network',
                'CourseCategory' => 'LAB',
                'Credit' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6852004',
                'CourseName' => 'Database Technology',
                'CourseCategory' => 'LAB',
                'Credit' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6365004',
                'CourseName' => 'Algorithm Design and Analysis',
                'CourseCategory' => 'LEC', // Dari Image 2
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6853004',
                'CourseName' => 'Artificial Intelligence',
                'CourseCategory' => 'LEC', // Dari Image 2
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'CHAR6032004',
                'CourseName' => 'Character Building: Agama',
                'CourseCategory' => 'LEC', // Dari Image 2
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'SCIE6067004',
                'CourseName' => 'Computational Physics',
                'CourseCategory' => 'LEC', // Dari Image 2
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'CPEN6250004',
                'CourseName' => 'Computer Networks',
                'CourseCategory' => 'LEC', // Dari Image 2
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6852004',
                'CourseName' => 'Database Technology',
                'CourseCategory' => 'LEC', // Dari Image 2
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6854004',
                'CourseName' => 'Object Oriented Programming',
                'CourseCategory' => 'LEC', // Dari Image 2
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'SCIE6068004',
                'CourseName' => 'Computational Biology',
                'CourseCategory' => 'LAB', // Dari Image 1
                'Credit' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6677004',
                'CourseName' => 'Multimedia Systems',
                'CourseCategory' => 'LAB', // Dari Image 1
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'SCIE6068004',
                'CourseName' => 'Computational Biology',
                'CourseCategory' => 'LEC', // Dari Image 4
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6955004',
                'CourseName' => 'Database Design',
                'CourseCategory' => 'LEC', // Dari Image 4
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6677004',
                'CourseName' => 'Multimedia Systems',
                'CourseCategory' => 'LEC', // Dari Image 4
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6856004',
                'CourseName' => 'Popular Programming Technology',
                'CourseCategory' => 'LEC', // Dari Image 4
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6712004',
                'CourseName' => 'Research Methodology in Computer Science',
                'CourseCategory' => 'LEC', // Dari Image 4
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6855004',
                'CourseName' => 'Software Engineering',
                'CourseCategory' => 'LEC', // Dari Image 4
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6790004',
                'CourseName' => 'Web Programming',
                'CourseCategory' => 'LEC', // Dari Image 4
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6678004',
                'CourseName' => 'Big Data Analytics for Business',
                'CourseCategory' => 'LEC', // Dari Image 3 (diasumsikan LEC/LB)
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6390004',
                'CourseName' => 'Compilation Techniques',
                'CourseCategory' => 'LEC', // Dari Image 3 (diasumsikan LEC/LB)
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6680004',
                'CourseName' => 'Data Visualization',
                'CourseCategory' => 'LEC', // Dari Image 3 (diasumsikan LEC/LB)
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'ENTR6521002',
                'CourseName' => 'Entrepreneurship: Market Validation',
                'CourseCategory' => 'LEC', // Dari Image 3 (diasumsikan LEC/LB)
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MOBI6063004',
                'CourseName' => 'Mobile Application Programming',
                'CourseCategory' => 'LEC', // Dari Image 3 (diasumsikan LEC/LB)
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6713004',
                'CourseName' => 'Operating System',
                'CourseCategory' => 'LEC', // Dari Image 3 (diasumsikan LEC/LB)
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            # Semester 7
            [
                'CourseId' => 'COMP6426001',
                'CourseName' => 'Industrial Experience in Information Technology',
                'CourseCategory' => 'LEC', 
                'Credit' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6762001',
                'CourseName' => 'Information Technology Practice in Industrial Experience',
                'CourseCategory' => 'LEC',
                'Credit' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6514001',
                'CourseName' => 'EES in Information Technology Industry 4',
                'CourseCategory' => 'LEC',
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
