<?php

namespace Database\Seeders;

use App\Models\Libro;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $libros = [
            [
                'titulo' => 'HASTA LA CORONILLA',
                'edad' => 'A partir de 8 años',
                'resena' => 'El príncipe Sinpapis I organiza un concurso de adopción para elegir una familia. Una reflexión sobre las relaciones entre padres e hijos y la búsqueda de la propia identidad a través del humor.',
            ],
            [
                'titulo' => 'MISHIYU',
                'edad' => 'A partir de 7 años',
                'resena' => 'Un niño de 4 años es adoptado por una mujer llamada Isabel. Una historia conmovedora sobre la adopción monoparental y el realismo ante los prejuicios sociales.',
            ],
            [
                'titulo' => 'HIJITO POLLITO',
                'edad' => 'De 4 a 8 años',
                'resena' => 'Una gata decide cuidar un huevo como si fuera suyo. El amor que los une está por encima de las diferencias físicas. Una familia diferente pero llena de amor.',
            ],
            [
                'titulo' => 'BOMBAY',
                'edad' => 'A partir de 6 años',
                'resena' => 'Narra la historia de una adopción internacional y el proceso de vinculación afectiva, destacando la importancia de los orígenes.',
            ],
            [
                'titulo' => 'CHOCO ENCUENTRA UNA MAMÁ',
                'edad' => 'A partir de 3 años',
                'resena' => 'Choco busca una mamá que se le parezca, pero descubre que una madre es mucho más que el aspecto físico. Un clásico sobre la diversidad familiar.',
            ],
            [
                'titulo' => 'LA MEJOR FAMILIA DEL MUNDO',
                'edad' => 'A partir de 3 años',
                'resena' => 'Carlota sueña con diferentes familias posibles mientras espera que la adopten. Al final, descubre que su familia real es la mejor de todas.',
            ],
            [
                'titulo' => 'FAMILIAS PARA ARMAR',
                'edad' => 'Adultos',
                'resena' => 'Relatos de vida y palabras de especialistas para reflexionar sobre qué es la adopción y cómo se construyen los vínculos en las familias de hoy.',
            ],
            [
                'titulo' => 'FAMILIA DE ACOGIDA',
                'edad' => 'Adultos',
                'resena' => 'Una guía y reflexión sobre el acogimiento familiar, las negligencias y el proceso de sanación de los niños que sufren situaciones de desamor.',
            ],
        ];

        foreach ($libros as $index => $libro) {
            Libro::create([
                'titulo' => $libro['titulo'],
                'edad' => $libro['edad'],
                'resena' => $libro['resena'],
                'orden' => $index + 1,
            ]);
        }
    }
}
