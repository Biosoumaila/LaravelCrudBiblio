<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthorExistence
{
    public function handle(Request $request, Closure $next): Response
    {
        $authorId = $request->route('author'); // Récupère le paramètre 'author' de la route

        if ($authorId && !Author::exists($authorId)) {
            // L'auteur n'existe pas, vous pouvez rediriger ou afficher une erreur
            return redirect()->route('authors.index')->with('error', 'Auteur non trouvé.');
            // Ou :
            // abort(404, 'Auteur non trouvé.');
        }

        return $next($request); // Passe la requête au prochain middleware ou à la route
    }
}
