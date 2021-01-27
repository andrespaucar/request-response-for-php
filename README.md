# request-response-for-php
Request and Response for PHP

POST API
```
$request = new Request();
$request->all();
// or
$request->input('name');
$request->name;
```

RESPONSE JSON
```
$response = new Response();
$response -> json(['name' => 'Andres'],200);
```

Alternative : HttpFoundation component the Symfony [url](https://symfony.com/doc/current/components/http_foundation.html) 
