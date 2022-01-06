<?php namespace App\Http\Middleware;

    use Closure;
use Illuminate\Support\Facades\Http;

class ValyutaMiddleware
    {
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $valyutaArray = Http::get('https://cbu.uz/ru/arkhiv-kursov-valyut/json')->json();
        $valyuta['usd'] = $valyutaArray[0];
        $valyuta['eur'] = $valyutaArray[1];
        $valyuta['rub'] = $valyutaArray[2];
        $valyuta['cny'] = $valyutaArray[14];

        file_put_contents('/valyuta.json', json_encode($valyuta));
        // file_put_contents('/home/yuldash1/public_html/public/valyuta.json', json_encode($valyuta));
        // dd(file_get_contents('/valyuta.json'));

        return $next($request);
    }
}
