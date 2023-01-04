# Lumen PHP Framework OAuth 2.0 

## Packages

https://github.com/dusterio/lumen-passport <br>
https://github.com/fruitcake/laravel-cors

## Setup

composer install <br>
php artisan migrate <br>
php artisan passport:install <br>
php artisan db:seed


## API call - Get Token example

curl --location --request POST 'http://localhost/lumen-oauth-example/public/oauth/token' \
--header 'Content-Type: application/json' \
--data-raw '{
"grant_type": "password",
"client_id": 2,
"client_secret": "A0lxuCWFFeqTyJp8xT2np4CzRFhf2NEYHzyx3heY",
"username": "admin@admin.com",
"password": "123456789",
"scope": "*"
}'

## API call - protected URL

curl --location --request GET 'http://localhost/lumen-oauth-example/public/api/test-get' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiZWFmMGUxMzY3MTkyODEyMTY4MjkyYTRhMDdlNzRjYjM2ODU3NDk4YTRiNTM5MjFmNTc4MGJlZGVlN2VhOTc2MDNkZTIzZDEwNWYxMGU3YTEiLCJpYXQiOjE2NzI4MzUyNDkuODE2NjQ3LCJuYmYiOjE2NzI4MzUyNDkuODE2NjUxLCJleHAiOjE3MDQzNzEyNDkuNzgxNTM2LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.nDSdxRrsDuP6_PyQOqhsN1rMUl-UPOt4PItrzHO4RqgvQrnfaG-O6SkI9RbO0B-vnIyhI5Ox0N3xK0hOT5uu3iOzD0w7nfIxGpnDak4ulrxed-VcDFawn101aeeaQAsJPYFBBVCzArYijehdjzJ01Z86jEl0kNfyMgBy_muiO8sFLuQb0P5ng10kbDuxBatQc0KjruS0II7wulBxTzGNVwWJIlMDvsML1sWLsDyKfbhhrD6HmYuxlITbStNBOtn4oxCM5g7VNnsSo-WUPZszG262RwUia6NE8oMS1_-SxGZavcD1EGRqTiOM0FCEU9bwJZjlQ0M7nEgYjt5mE74fvsibaTSbDUeF_Z-KwsAYWln34mmrz2V52f-feZQeTaT1en26BSnemI9vWNG-uJdTTHyEMQng2c4PpvTMo2v2858ezZ4agYo10iSVLIP2a2ESNqj-whsxqY2m9oW_cNP_x3wVXPFhRFZnZHlq4PBD3qMSOVibjIxNMlXQW3wMndv2wOMaRvVSUs5lJUQeAjZhI6YybuETlpC-o92kGMqsJGSlZnpe9tVq4WcuZcu_Hm3Gar7qr7YHgmq0-JLmbddQrUxgQU1oVG_9L9SqP2K6oCXctxrHzbsTQTvCb6r2yWsDrfqpNwU8UPrqalzfhMRjV4JpPio7y4Cv5tRKzMrknik'
