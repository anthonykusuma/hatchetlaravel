# Hatchet
A code interview test for full-stack engineeer at Hatchet. Developed by Anthony.

## Stacks
- Laravel v10
- Livewire v2
- Tailwind CSS v3

## How to
1. Clone this repository
2. Run ``npm install`` and ``composer install`` to install all dependencies
3. Create ``.env`` file and copy all content from ``.env.example`` then change ``DB_DATABASE`` value to ``hatchetlaravel``
4. Run ``php artisan migrate`` and ``php artisan db:seed`` for database migration and seeding
5. Run ``php artisan key:generate`` to set the application key
6. Run ``npm run dev``
7. Run ``php artisan serve`` and access the website from [http://localhost:8000](http://localhost:8000)

## Things that can be improved
- Using multi slider for range selection (Price and Size)
