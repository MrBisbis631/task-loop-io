# TaskLoopIO

TaskLoopIO is an app for freelancers to manage their projects. It menages the tsks, clients, projects and more.

## Installation

Make sure you have docker and docker-compose installed on your machine.

Install php and laravel:

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

Install the php dependencies:

```bash
composer install
```

Run migrations:

```bash
sail artisan migrate
```

Run the seeder:

```bash
sail artisan db:seed
# when running on production add the --force flag
```

Install the npm dependencies and run dev:

```bash
sail npm install && sail npm run build
sail npm run dev
```

Now You can visit

- The app at [http://localhost](http://localhost)
- The mailbox at [http://localhost:8025](http://localhost:8025)
- The minio at [http://localhost:9000](http://localhost:9000)

## Code Guidlince

1. Lint backend with pint using `sail artisan lint`
2. Linf frontend with eslint using `sail npm run lint`
3. Run tests with `sail test`
4. Controller should be either a resource or a action controller
