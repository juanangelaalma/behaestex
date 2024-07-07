s:
	./vendor/bin/sail up

shell:
	docker exec -it behaestex-laravel.test-1 bash

shell-db:
	docker exec -it behaestex-mysql-1 bash

migrate:
	./vendor/bin/sail artisan migrate