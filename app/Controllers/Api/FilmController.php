<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;


class FilmController extends BaseController
{

    private $movies = [
        ["title" => "Inception", "genre" => "Sci-Fi"],
        ["title" => "The Godfather", "genre" => "Crime"],
        ["title" => "Pulp Fiction", "genre" => "Crime"],
        ["title" => "The Dark Knight", "genre" => "Action"],
        ["title" => "Interstellar", "genre" => "Sci-Fi"],
        ["title" => "Parasite", "genre" => "Drama"],
        ["title" => "Avengers: Endgame", "genre" => "Action"],
        ["title" => "The Shawshank Redemption", "genre" => "Drama"],
    ];

    public function index()
    {

        $genre = $this->request->getGet('genre');


        if ($genre) {
            $filteredMovies = array_filter($this->movies, function ($movie) use ($genre) {
                return strcasecmp($movie['genre'], $genre) === 0;
            });


            if (empty($filteredMovies)) {
                return response()->setJSON(['status' => 'gagal', 'message' => 'Data tidak ditemukan'], 404);
            }

            return response()->setJSON(['status' => 'sukses', 'data' => $filteredMovies],  200);
        }


        return response()->setJSON(['status' => 'sukses', 'data' => $this->movies], 200);
    }
}
