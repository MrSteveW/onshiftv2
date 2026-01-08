# OnShift booking system v2

## Description:

Booking system for managers to book each staffmember to one task per day.

## Current version features

Staff table id | name | role | date_started | date_ended | (soft)deleted_at
Task table id | name | (soft)deleted_at
Duty table id | staffmember_id | task_id | dutydate | shift_type | hours

- [x] Tech stack - Laravel | Inertia | React | Tailwind
- [x] Model, resource controller and migration for Staffmember, Analyser and Shift.
- [x] Softdelete for Staffmember and Analyser

## Setup instructions

1. Fork the repository and clone your fork to your local machine
2. Run `npm install`
3. Run `php artisan migrate` to run all SQLite migrations on your local machine
4. Run `composer run dev` to start the PHP server and development server
5. Open http://localhost:8000 with your browser to see the app
