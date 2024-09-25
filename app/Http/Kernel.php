protected $middlewareGroups = [
    'web' => [
        // Other middleware...
        \App\Http\Middleware\StoreDropdownValue::class,
    ],
];
