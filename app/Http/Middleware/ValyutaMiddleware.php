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
        $valyuta['rub'] = Http::get('https://cbu.uz/ru/arkhiv-kursov-valyut/json/RUB/')->json()[0];
        $valyuta['usd'] = Http::get('https://cbu.uz/ru/arkhiv-kursov-valyut/json/USD/')->json()[0];
        $valyuta['eur'] = Http::get('https://cbu.uz/ru/arkhiv-kursov-valyut/json/EUR/')->json()[0];
        $valyuta['cny'] = Http::get('https://cbu.uz/ru/arkhiv-kursov-valyut/json/CNY/')->json()[0];

        file_put_contents('/valyuta.json', json_encode($valyuta));
        // dd(file_get_contents('/valyuta.json'));

        return $next($request);
    }
}
