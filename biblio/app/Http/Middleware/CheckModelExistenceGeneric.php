<?php

namespace App\Http\Middleware;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Route;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckModelExistenceGeneric
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $modelNameParameter
     * @param  string  $modelNamespace
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $modelNameParameter, string $modelNamespace = 'App\\Models'): Response
    {
        $modelId = $request->route($modelNameParameter);
        $modelClass = $modelNamespace . '\\' . ucfirst($modelNameParameter);

        if ($modelId) {
            try {
                $model = app($modelClass)->findOrFail($modelId);
                // Vous pouvez éventuellement partager le modèle avec la requête si nécessaire
                $request->attributes->add([$modelNameParameter => $model]);
            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => ucfirst($modelNameParameter) . ' not found.'], 404);
                // Ou rediriger :
                // return redirect()->route(str plural($modelNameParameter) . '.index')->with('error', ucfirst($modelNameParameter) . ' not found.');
            }
        }

        return $next($request);
    }
}