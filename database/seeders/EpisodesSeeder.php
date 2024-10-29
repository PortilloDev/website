<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('episodes')->insert([
        [
            'id' => 1,
            'title' => '!Hola, Mundo! Bienvenidos a Artesanos del Código',
            'description' => '
En este episodio inaugural de "Artesanos del Código", te cuento como con 35 años y sin experiencia en programación, conseguí adentrarme en el mundo del desarrollo de software.
También te presenta la visión y el propósito de este podcast: ser un espacio de aprendizaje, motivación y comunidad para todos aquellos que deseen explorar el arte de programar, sin importar su edad o experiencia previa.
Si estás pensando en dar un giro profesional, adentrarte en la programación o simplemente buscas inspiración, este episodio es para ti. ¡Únete a la aventura y descubre que tú también puedes ser un artesano del código!',
            'embedded' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/3KKap8gTklLFkcl0QdPeE1?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>',
            'image' => 'episodio1.png',
            'slug' => 'hola-mundo-bienvenidos-a-artesanos-del-codigo',
            'url' => 'https://open.spotify.com/episode/3KKap8gTklLFkcl0QdPeE1',
            'release_date' => '2024-10-11',
        ],
        [
            'id' => 2,
            'title' => 'El Arte de Resolver Problemas Sin Código',
            'description' => 'En este episodio de Artesanos del Código, exploramos una técnica fundamental que te ayudará a mejorar tu forma de programar: el pseudocódigo. Antes de sumergirte en la sintaxis y los lenguajes de programación, es vital que aprendas a pensar en algoritmos y en cómo resolver problemas de manera estructurada.
Iván Portillo te cuenta por qué dejar el código para el final es la clave para ser un programador más eficiente. Desde su experiencia personal, te hablará de cómo el pseudocódigo le ha permitido ahorrar tiempo y evitar errores, y cómo puede hacer lo mismo por ti. Aprender a programar no se trata solo de memorizar sintaxis, sino de dominar la lógica detrás de cada solución.
Descubre cómo organizar tus ideas, visualizar flujos complejos y comunicarte mejor con tu equipo usando pseudocódigo y diagramas, y empieza a enfocarte en lo que realmente importa: resolver problemas. Si quieres llevar tus habilidades de programación al siguiente nivel, este episodio es para ti.',
            'embedded' => '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1EoB7ExmyLh6v3cus7GDhX?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>',
            'image' => 'episodio2.jpeg',
            'slug' => 'el-arte-de-resolver-problemas-sin-codigo',
            'url' => 'https://open.spotify.com/episode/1EoB7ExmyLh6v3cus7GDhX',
            'release_date' => '2024-10-21',
        ]
        ]);
    }
}
