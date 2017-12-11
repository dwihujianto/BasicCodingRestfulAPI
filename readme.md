# Simple Restful

## Setup

## php artisan migrate

## php artisan db:seed

## php artisan serve

## Endpoint

### Fetch All User Review GET => `http://localhost:8000/api/user-review`

### Fetch By Id GET => `http://localhost:8000/api/user-review/{id}`

### New User Review POST => `http://localhost:8000/api/user-review`

### Update User Review PUT => `http://localhost:8000/api/user-review/{id}`

### Request Body

```json
	{
		"order_id":213,
		"product_id":654,
		"user_id":6,
		"rating":4.0,
		"review":"Mantaps"
	}
```



### Delete User Review DELETE => `http://localhost:8000/api/user-review/{id}`