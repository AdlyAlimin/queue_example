# Queue example using command and KuCoin api

This example is using KuCoin API.
This project is using Livewire and Tailwind CSS.

## Installation

```bash
composer install
cp .env.example.env
php artisan key:generate
php artisan migrate
npm install
npm run dev
```

## Configuration

Change **QUEUE_CONNECTION** in .env from ***sync*** to ***database***

## Run Queue

Open new terminal and run this command -

```bash
php artisan queue:listen #this is for local development
```

## Run Scheduler

Open new terminal and run this command - 

```bash
php artisan schedule:work
```

Notes: 

Please refresh page 20 second after first run.
